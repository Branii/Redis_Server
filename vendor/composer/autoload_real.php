<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfdd0e4562eeede5a5483a1ad1e1873fd
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitfdd0e4562eeede5a5483a1ad1e1873fd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfdd0e4562eeede5a5483a1ad1e1873fd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfdd0e4562eeede5a5483a1ad1e1873fd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
