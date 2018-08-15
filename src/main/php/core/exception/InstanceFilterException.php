<?php
namespace prophet\core\exception;

class InstanceFilterException extends Exception
{
    function __construct(string $msg) {
        parent::__construct($msg);
    }
}

