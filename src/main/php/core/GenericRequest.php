<?php
namespace prophet\core;

interface GenericRequest
{
    function getProtocol(): string;
    function setParameter(string $param, $object): void;
    function getParameter(string $param);
    function getParameterNames(): array;
    function getRemoteHost(): string;
    function getLang(): string;
    function getCountryCode(): string;
    function getCountry(): string;
    function getCharacterEnconding(): string;
    function redirect(string $path, GenericRequest $request, GenericResponse $response): void;
    function getServerPort(): string;
    function getRequestedPath(): string;
    function getApplicationContext(): ApplicationContext;
}

