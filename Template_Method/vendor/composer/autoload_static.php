<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80c892be0fd8fbae48428eb8b1f38a5b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit80c892be0fd8fbae48428eb8b1f38a5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80c892be0fd8fbae48428eb8b1f38a5b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80c892be0fd8fbae48428eb8b1f38a5b::$classMap;

        }, null, ClassLoader::class);
    }
}
