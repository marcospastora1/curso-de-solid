<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2b7ee1629ef26a7186d1a75c193439f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita2b7ee1629ef26a7186d1a75c193439f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2b7ee1629ef26a7186d1a75c193439f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2b7ee1629ef26a7186d1a75c193439f::$classMap;

        }, null, ClassLoader::class);
    }
}