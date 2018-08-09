<?php
namespace prophet\core;

interface ParameterConfig
{
    function getInitParameter(string $name): string;
    function getInitParameterNames(): array;
}

