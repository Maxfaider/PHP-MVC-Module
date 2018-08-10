<?php
namespace prophet\http;

interface HttpSession
{
    function setAttribute(string $name, $object): void;
    function getAttribute(string $name);
    function getAttributeNames(): array;
    function isInvalid(): bool;
    function setMaxInactiveInterval(string $seconds): void;
    function getMaxInactiveInterval(): string;
    function getLastAccessedTime(): string;
    function getId(): string;
}

