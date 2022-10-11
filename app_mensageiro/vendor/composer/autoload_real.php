<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita2b7ee1629ef26a7186d1a75c193439f
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

        spl_autoload_register(array('ComposerAutoloaderInita2b7ee1629ef26a7186d1a75c193439f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita2b7ee1629ef26a7186d1a75c193439f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita2b7ee1629ef26a7186d1a75c193439f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
