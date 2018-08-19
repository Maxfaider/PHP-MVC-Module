<?php
namespace prophet\core;

interface Cache
{
    function add(string $keyName, $object);
    function get(string $keyName);
    function delete(string $keyName);
    function exits(string $keyName);
}

