<?php 
class CacheClient extends RedisClient{

    public static function ping () : string {
        return (new RedisClient)->ping();
    }
    
    public static function push (string $key, string $payload) : string {
        return "";
    }
    
    public static function pull (string $key) : string {
        return "";
    }

}