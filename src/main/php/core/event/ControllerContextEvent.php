<?php
namespace prophet\core\event;

use prophet\core\GenericController;

interface ControllerContextEvent extends ActionEvent
{
    function contextInitialized(GenericController $controller);
}

