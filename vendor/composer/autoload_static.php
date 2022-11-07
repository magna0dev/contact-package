<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd75c8160014c6ebd2403c700002af535
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Magna\\Contact\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Magna\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd75c8160014c6ebd2403c700002af535::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd75c8160014c6ebd2403c700002af535::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd75c8160014c6ebd2403c700002af535::$classMap;

        }, null, ClassLoader::class);
    }
}