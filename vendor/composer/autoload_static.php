<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbdd3c5de8967fca47702a2814346361a
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Backend\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Backend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbdd3c5de8967fca47702a2814346361a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbdd3c5de8967fca47702a2814346361a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbdd3c5de8967fca47702a2814346361a::$classMap;

        }, null, ClassLoader::class);
    }
}