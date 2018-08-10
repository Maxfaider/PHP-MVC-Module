<?php
namespace prophet\http;

use prophet\core\GenericResponse;

interface HttpResponse extends GenericResponse
{
    // methods inherited from GenericResponse
    function write(string $output): void;
    function writeln(string $output): void;
    function setCharacterEncoding(string $encoding): void;
    function flushBuffer(): void;
    function getBufferCurrent(): string;
    function getStatusBuffer(): array;
    // own methods
    function addHeader(string $name, string $value): void;
    function addCookie(HttpCookie $cookie): void;
    function createSession(): HttpSession;
    function sendStatus(int $status);
}

