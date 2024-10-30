<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03ce483e1e15a7655bd7af9251265c6d
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KAGG\\PagespeedModule\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KAGG\\PagespeedModule\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/php',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'KAGG\\PagespeedModule\\Main' => __DIR__ . '/../..' . '/src/php/Main.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03ce483e1e15a7655bd7af9251265c6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03ce483e1e15a7655bd7af9251265c6d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit03ce483e1e15a7655bd7af9251265c6d::$classMap;

        }, null, ClassLoader::class);
    }
}
