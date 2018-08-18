<?php
namespace prophet;

use prophet\core\ApplicationContext;
use prophet\core\GenericController;
use prophet\core\Filter;
use prophet\core\event\ActionEvent;

class ApplicationContextBuild
{
    private $application;
    private $controllers;
    private $filters;
    private $actionEvents;
    
    function setControllers(array $controllers) {
        $this->controllers = $controllers;
        return $this;
    }
    
    function setFilters(array $filters) {
        $this->filters = $filters;
        return $this;
    }
    
    function setEvents(array $actionEvents) {
        $this->actionEvents = $actionEvents;
        return $this;
    }
    
    function build(): ApplicationContext {
        return new class($this->controllers, $this->filters, $this->actionEvents)
            implements ApplicationContext {
            
            private $attributes;
            private $controllers;
            private $filters;
            private $actionEvents;
            
            function __construct(array $controllers, array $filters, array $actionEvents) {
                $this->attributes = new \Ds\Map();
                $this->controllers = $controllers;
                $this->filters = $filters;
                $this->actionEvents = $actionEvents;
            }
            function setAttribute(string $keyName, $object): void {
                $this->attributes->put($keyName, $object);
            }
            function getAttribute(string $keyName) {
                return $this->attributes->get($keyName);
            }
            function removeAttribute(string $keyName) {
                return $this->attributes->remove($keyName) ;
            }
            function getAttributeNames(): array {
                return $this->attributes
                    ->keys()
                    ->toArray();
            }
            function getController(string $name): GenericController {
                return $this->controllers[$name];
            }
            function getFilter(string $name): Filter {
                return $this->filters[$name];
            }
            function getActionEvent(string $name): ActionEvent {
                return $this->actionEvents[$name];
            }
            function getServerInfo(): array {
                return [
                    "name" => $_SERVER['SERVER_NAME'],
                    "software" => $_SERVER['SERVER_SOFTWARE'],
                    "address" => $_SERVER['SERVER_ADDR'],
                    "protocol" => $_SERVER['SERVER_PROTOCOL'],
                    "port" => $_SERVER['SERVER_PORT'],
                    "admin" => $_SERVER['SERVER_ADMIN']
                ];
            }
        };
    }
}

