<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita55aadabf10c6081176cca9482bb6691
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
            'controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita55aadabf10c6081176cca9482bb6691::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita55aadabf10c6081176cca9482bb6691::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita55aadabf10c6081176cca9482bb6691::$classMap;

        }, null, ClassLoader::class);
    }
}
