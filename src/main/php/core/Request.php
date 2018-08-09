<?php
namespace prophet\core;

interface Request
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
    function redirect(string $path, Request $request, Response $response): void;
    function getServerPort(): string;
    function getRequestedPath(): string;
}

