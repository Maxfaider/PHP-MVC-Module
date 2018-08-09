<?php
namespace prophet\core;

interface Response
{
    function write(string $output): void;
    function writeln(string $output): void;
    function setCharacterEncoding(string $encoding): void;
    function flushBuffer(): void;
    function getBufferCurrent(): string;
    function getStatusBuffer(): array;
}

