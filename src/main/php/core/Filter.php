<?php
namespace prophet\core;

interface Filter extends CycleLife
{
    function init(ParameterConfig $config): void;
    function destroy(): void;
    function doFilter(GenericRequest $request, GenericResponse $response);
}
