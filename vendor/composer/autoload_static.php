<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd291c675a2749010cf8403826572d6bd
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Naseg\\Flags\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Naseg\\Flags\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd291c675a2749010cf8403826572d6bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd291c675a2749010cf8403826572d6bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd291c675a2749010cf8403826572d6bd::$classMap;

        }, null, ClassLoader::class);
    }
}
