<?php
namespace prophet;

use prophet\core\Cache;
//need APCu
class CacheAPCu implements Cache
{
    
    private static $cache;
    
    private function __construct() {
        
    }
    
    static function getInstance(): Cache {
        if(self::$cache === null)
            self::$cache = new CacheAPCu();
        return self::$cache;
    }
    
    public function add($keyName, $object)
    {
        apcu_add($keyName, serialize($object));
    }
    
    public function get($keyName)
    {
        return unserialize(apcu_fetch($keyName));
    }
    
    public function delete($keyName)
    {
        apcu_delete($keyName);
    }
    
    public function exits(string $keyName)
    {
        return apcu_exists($keyName);
    } 
}

