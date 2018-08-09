<?php
namespace prophet\core;

interface ApplicationContext extends CycleLife
{
    function init(ParameterConfig $config): void;
    function destroy(): void;
    function setAttribute(string $keyName, $object): void;
    function getAttribute(String $keyName);
    function removeAttribute(String $keyName);
    function getAttibuteNames(): array;
    function getServerInfo(): array;
}

