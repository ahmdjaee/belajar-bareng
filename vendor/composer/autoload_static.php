<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc0a7571145cc8afa4c9bb4975447923
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modular\\BelajarBareng\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modular\\BelajarBareng\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc0a7571145cc8afa4c9bb4975447923::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc0a7571145cc8afa4c9bb4975447923::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfc0a7571145cc8afa4c9bb4975447923::$classMap;

        }, null, ClassLoader::class);
    }
}
