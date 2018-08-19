<?php
namespace prophet;

use prophet\core\ParameterConfig;
use prophet\core\ApplicationContext;
use prophet\core\GenericController;
use prophet\core\Filter;
use prophet\EventManager;
use prophet\manager\ControllerManager;
use prophet\manager\ControllerEventManager;
use prophet\core\event\ApplicationContextEvent;
use prophet\core\event\ControllerContextEvent;

class Initialize_Components
{
    static function initialize_Context($arrayApplication, array $controllers, 
        array $filters, array $actionEvents, ApplicationContextEvent $applicationContextEvent): void {
        
        $applicationContextBuild = new ApplicationContextBuild($applicationContextEvent);
        $applicationContext = $applicationContextBuild
            ->setControllers($controllers)
            ->setFilters($filters)
            ->setEvents($actionEvents)
            ->build(); 
        $applicationContext->setAttribute('company', $arrayApplication->{'company'});
        $applicationContext->setAttribute('version', $arrayApplication->{'version'});
        
        $cache = CacheAPCu::getInstance();
        $cache->add('prophet\application', $applicationContext);
    }
    
    static function initialize_Controllers($arrayControllers, ControllerContextEvent $controllerContextEvent): ControllerManager {
        $controllerManager = new ControllerManager();
        foreach ($arrayControllers as $arrayController) {
            $controller_reference_temp = new $arrayController->{'classname'}();
            if(isset($arrayController->{'initparameter'}))
                self::initialize_CycleLife($controller_reference_temp, $arrayController->{'initparameter'});
            $controllerContextEvent->contextInitialized($controller_reference_temp);
            $controllerManager->addController(
                $controller_reference_temp, 
                $arrayController->{'classname'}, 
                $arrayController->{'url-pattern'}, 
                $arrayController->{'description'}
            );
        }
        return $controllerManager;
    }
    
    static function initialize_Filters($arrayFilters): FilterManager {
        $filterManager = new FilterManager();
        foreach ($arrayFilters as $arrayFilter) {
            $filter_reference_temp = new $arrayFilterr->{'classname'}();
            if(isset($arrayController->{'initparameter'}))
                self::initialize_CycleLife($filter_reference_temp, $arrayController->{'initparameter'});
            $filterManager->addFilter(
                $filter_reference_temp,
                $arrayController->{'classname'},
                $arrayController->{'url-pattern'},
                $arrayController->{'description'}
            );
        }
        return $filterManager;
    }
    
    static function initialize_Events(): EventManager {
        
    }
    
    static function initialize_CycleLife($object, $arrayInitParameter) {
        $object->init(new ParameterConfigImpl($arrayInitParameter));
    }
}

