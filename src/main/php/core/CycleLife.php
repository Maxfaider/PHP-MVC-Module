<?php
namespace prophet\core;

interface CycleLife
{
    function init(ParameterConfig $config): void;
    function destroy(): void;
}

