<?php
namespace prophet\core\event;

use prophet\core\ApplicationContext;

interface ApplicationContextEvent extends ActionEvent
{
    function contextInitialized(ApplicationContext $context): void;
    function contextDestroyed(ApplicationContext $context): void;
}

