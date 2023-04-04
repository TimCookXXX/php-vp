<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41fede67d62890e172f669e204849807
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Base\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Base\\' => 
        array (
            0 => __DIR__ . '/../..' . '/base',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41fede67d62890e172f669e204849807::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41fede67d62890e172f669e204849807::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41fede67d62890e172f669e204849807::$classMap;

        }, null, ClassLoader::class);
    }
}