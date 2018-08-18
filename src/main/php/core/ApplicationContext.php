<?php
namespace prophet\core;

use prophet\core\event\ActionEvent;

interface ApplicationContext
{
    function setAttribute(string $keyName, $object): void;
    function getAttribute(String $keyName);
    function removeAttribute(String $keyName);
    function getAttributeNames(): array;
    function getController(string $name): GenericController;
    function getFilter(string $name): Filter;
    function getActionEvent(string $name): ActionEvent;
    function getServerInfo(): array;
}

