<?php
namespace prophet\core\event;

use prophet\core\GenericController;

interface ControllerContextEvent extends ActionEvent
{
    function contextDestroyed(GenericController $controller);
    function contextInitialized(GenericController $controller);
}

