<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef1d11f02d4aa1246dec15a70320bc47
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\Contactus\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\Contactus\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitef1d11f02d4aa1246dec15a70320bc47::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef1d11f02d4aa1246dec15a70320bc47::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef1d11f02d4aa1246dec15a70320bc47::$classMap;

        }, null, ClassLoader::class);
    }
}