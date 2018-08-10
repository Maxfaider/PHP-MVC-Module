<?php
namespace prophet\core;

use prophet\core\event\ActionEvent;

interface ApplicationContext extends CycleLife
{
    function init(ParameterConfig $config): void;
    function destroy(): void;
    function setAttribute(string $keyName, $object): void;
    function getAttribute(String $keyName);
    function removeAttribute(String $keyName);
    function getAttibuteNames(): array;
    function getController(string $name): GenericController;
    function getFilter(string $name): Filter;
    function getActionEvent(string $name): ActionEvent;
    function getServerInfo(): array;
}

