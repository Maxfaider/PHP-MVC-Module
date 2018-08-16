<?php
namespace prophet\core;

abstract class Filter extends CycleLife
{
    function init(ParameterConfig $config): void 
    {}
    
    function destroy(): void 
    {}
    
    abstract function doFilter(GenericRequest $request, GenericResponse $response): void;
}

