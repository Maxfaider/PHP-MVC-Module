<?php
namespace prophet;

class Node
{
    private $object;
    private $patterns;
    private $classname;
    private $description;
    
    function __construct($object, string $classname, array $patterns, string $description="") {
        $this->classname = $classname;
        $this->object = $object;
        $this->patterns = $patterns;
        $this->description = $description;
    }
    
    public function getPatterns(): array
    {
        return $this->patterns;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function getClassname(): string
    {
        return $this->classname;
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}

