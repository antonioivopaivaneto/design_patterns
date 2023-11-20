<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit519c845cbb8c16c1037aad1429a293af
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

        spl_autoload_register(array('ComposerAutoloaderInit519c845cbb8c16c1037aad1429a293af', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit519c845cbb8c16c1037aad1429a293af', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit519c845cbb8c16c1037aad1429a293af::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}