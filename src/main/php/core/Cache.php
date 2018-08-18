<?php
namespace prophet\core;

interface Cache
{
    function add(string $keyName, $object);
    function get(string $keyName);
    function clear(string $keyName);
}

