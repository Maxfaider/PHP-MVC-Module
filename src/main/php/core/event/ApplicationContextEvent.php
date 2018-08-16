<?php
namespace prophet\core\event;

interface ApplicationContextEvent extends ActionEvent
{
    function contextInitialized(ApplicationContextEvent $context);
    function contextDestroyed(ApplicationContextEvent $context);
}

