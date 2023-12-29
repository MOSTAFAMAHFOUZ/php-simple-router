<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3aa02822a313a8d6d3a755a8b4a9984c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mostafamahfouz\\PhpRouterPackage\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mostafamahfouz\\PhpRouterPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3aa02822a313a8d6d3a755a8b4a9984c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3aa02822a313a8d6d3a755a8b4a9984c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3aa02822a313a8d6d3a755a8b4a9984c::$classMap;

        }, null, ClassLoader::class);
    }
}
