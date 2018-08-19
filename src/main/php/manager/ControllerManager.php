<?php
namespace prophet\manager;

use prophet\core\GenericController;
use prophet\core\GenericRequest;
use prophet\core\GenericResponse;

class ControllerManager
{
    private $controllersNodes = [];
    
    function addController(GenericController $controller, string $classname, array $urlPatterns, string $description="") {
        $controllerNodes[] = new Node($controller, $classname, $urlPatterns, $description);
    }
    
    function acceptRequest(GenericRequest $request, GenericResponse $response) {
        foreach ($this->controllersNodes as $node) {
            $is_uri_valid = MappingPattern::checkURI($node->getPatterns(), $request.getRequestedPath());
            if($is_uri_valid)
                acceptController($node->getObject(), $request, $response);
        }
    }
    
    private function acceptController(GenericController $controller, GenericRequest $request, GenericResponse $response) {
        $controller->service($request, $response);
    }
    
    function getControllers(): array {
        $array_of_controllers = [];
        foreach ($this->$controllersNodes as $node) {
            $array_of_controllers[] = $node->getObject();
        }
        return $array_of_controllers;
    }
    
}

