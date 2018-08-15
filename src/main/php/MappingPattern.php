<?php
namespace prophet;

class MappingPattern
{
    static function transformURI(array $patterns) {
        foreach ($patterns as $index => $pattern) {
            $patterns[$index] = '/' . strtr($pattern,
                [
                    "/" => "\/",
                    "*" => ".*",
                    "+" => ".+",
                    "?" => ".?",
                ]) . '/';
        }
        return $patterns;
    }
    
    static function checkURI(array $patterns, $uri): bool {
        foreach ($patterns as $pattern) {
            if( preg_match($pattern, $uri) )
                return true;
        }
        return false;
    }
}

