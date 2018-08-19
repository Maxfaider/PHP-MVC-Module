<?php
namespace prophet\http;

use prophet\core\GenericRequest;
use prophet\core\GenericResponse;

interface HttpRequest extends GenericRequest
{
    //methods inherited from GenericRequest
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
    //own methods
    function getHeader(string $name): string;
    function getHeaderNames(): array;
    function getSession(): HttpSession;
    function isSession(): bool;
    function getCookie(string $name): HttpCookie;
    function getCookieNames(): array;
    function getMehthod(): string;
}

