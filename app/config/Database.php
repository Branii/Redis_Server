<?php 

class Database extends Config {
    private static $pdo; 

    public static function open(): PDO {
        return self::$pdo ??= new \PDO(parent::$config['/'], parent::$config['//'], parent::$config['///']);
    }

    public static function close(): void {
        self::$pdo = null; 
    }
}
