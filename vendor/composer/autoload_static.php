<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit721e4cb84f2cbfc5c5ef17fe4d04d5dd
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CowSay\\Traits\\' => 14,
            'CowSay\\Core\\' => 12,
            'CowSay\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CowSay\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Traits',
        ),
        'CowSay\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Core',
        ),
        'CowSay\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Carcases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit721e4cb84f2cbfc5c5ef17fe4d04d5dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit721e4cb84f2cbfc5c5ef17fe4d04d5dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit721e4cb84f2cbfc5c5ef17fe4d04d5dd::$classMap;

        }, null, ClassLoader::class);
    }
}
