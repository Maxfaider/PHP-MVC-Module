<?php
namespace prophet\core\exception;

class InstanceControllerException extends Exception
{
    function __construct(string $msg) {
        parent::__constructor($msg);
    }
}

