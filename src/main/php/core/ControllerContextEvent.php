<?php
namespace prophet\core;

interface ControllerContextEvent extends ActionEvent
{
    function contextDestroyed(Controller $controller);
    function contextInitialized(Controller $controller);
}

