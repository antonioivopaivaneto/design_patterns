<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1a1bc6272621c058fdc53338e8c0c44
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1a1bc6272621c058fdc53338e8c0c44::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1a1bc6272621c058fdc53338e8c0c44::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc1a1bc6272621c058fdc53338e8c0c44::$classMap;

        }, null, ClassLoader::class);
    }
}
