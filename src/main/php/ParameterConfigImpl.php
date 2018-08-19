<?php
namespace prophet;

use prophet\core\ParameterConfig;

class ParameterConfigImpl implements ParameterConfig
{
    private $parameters;
    
    function __construct($arrayInitParameter) {
        $this->parameters = $arrayInitParameter;
    }
    
    function getInitParameter(string $name): string {
        return $this->parameters->{"$name"};
    }
    
    function getInitParameterNames(): array {
        $array_names_parameter = [];
        foreach ($this->parameters as $key => $value) {
            $array_names_parameter = $key;
        }
        return $array_names_parameter;
    }
}

