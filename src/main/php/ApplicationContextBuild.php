<?php
namespace prophet;

use prophet\core\ApplicationContext;
use prophet\core\GenericController;
use prophet\core\Filter;
use prophet\core\event\ApplicationContextEvent;

class ApplicationContextBuild
{
    private $controllers;
    private $filters;
    private $actionEvents;
    private $applicationContextEvent;
    
    function __construct(ApplicationContextEvent $applicationContextEvent) {
        $this->applicationContextEvent = $applicationContextEvent;
    }
    
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
        return new ApplicationContextImpl($this->controllers, $this->filters, $this->actionEvents, $this->applicationContextEvent);
    }
}

