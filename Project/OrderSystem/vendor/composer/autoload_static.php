<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit387549fb15ecef89f82d64e8c671d1cf
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OrderSystem\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OrderSystem\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit387549fb15ecef89f82d64e8c671d1cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit387549fb15ecef89f82d64e8c671d1cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit387549fb15ecef89f82d64e8c671d1cf::$classMap;

        }, null, ClassLoader::class);
    }
}
