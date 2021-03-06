<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9846be0e01d83d7829bbf770bfb24910
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'PressBits\\MediaLibrary\\' => 23,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PressBits\\MediaLibrary\\' => 
        array (
            0 => __DIR__ . '/..' . '/press-bits/media-library-svg-display/source',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Rarst\\wps\\Admin_Ajax_Handler' => __DIR__ . '/..' . '/wps/php/class-admin-ajax-handler.php',
        'Rarst\\wps\\Plugin' => __DIR__ . '/..' . '/wps/php/class-plugin.php',
        'Rarst\\wps\\Rest_Api_Handler' => __DIR__ . '/..' . '/wps/php/class-rest-api-handler.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9846be0e01d83d7829bbf770bfb24910::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9846be0e01d83d7829bbf770bfb24910::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9846be0e01d83d7829bbf770bfb24910::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9846be0e01d83d7829bbf770bfb24910::$classMap;

        }, null, ClassLoader::class);
    }
}
