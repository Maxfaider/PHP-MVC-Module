<?php
namespace prophet\core\dispatcher;

use prophet\core\GenericController;

interface RequestDispatcher
{
    function resolver(string $uri): void;
}

