<?php
namespace prophet\core;

interface ApplicationContext
{
    function setAttribute(string $keyName, $object): void;
    function getAttribute(String $keyName);
    function removeAttribute(String $keyName);
    function getAttibuteNames(): array;
    function getServerInfo(): array;
}

