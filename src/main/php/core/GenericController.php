<?php
namespace prophet\core;

interface GenericController extends CycleLife
{
    function init(ParameterConfig $config): void;
    function destroy(): void;
    function service(GenericRequest $request, GenericResponse $response): void;
}

