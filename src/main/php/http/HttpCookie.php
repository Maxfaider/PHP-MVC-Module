<?php
namespace prophet\http;

class HttpCookie
{
    private $name;
    private $value;
    private $isSecure = false;
    private $isHttpOnly = false;
    private $pathDomain = "/";
    private $seconds = 86400; // 1 days default
    
    function __construct(string $name, string $value) 
    {
        $this->name = $value;
        $this->value = $value;
    }
    
    function setName(string $name): void
    {
        $this->name = $name;
    }
    
    function setValue(string $value): void
    {
        $this->value = $value;
    }
    
    function setSecure(boolean $isSecure): void 
    {
        $this->isSecure = $isSecure;
    }
    
    function setHttpOnly(boolean $isHttpOnly): void
    {
        $this->isHttpOnly = $isHttpOnly;
    }
    
    function setDomain(string $pathDomain): void
    {
        $this->pathDomain = $pathDomain;
    }
    
    function setExpires(int $seconds): void {
        $this->seconds = $seconds;
    }
    
    function getName(): string
    {
        return $this->name;
    }
    
    function getValue(): string
    {
        return $this->value;
    }
    
    function isSecure(): bool
    {
        return $this->isSecure;
    }
    
    function isHttpOnly(): bool
    {
        return $this->isHttpOnly;
    }
    
    function getPathDomain(): string
    {
        return $this->pathDomain;
    }
    
    function getSeconds(): string
    {
        return $this->seconds;
    }
}


