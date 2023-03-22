<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa197261c87ee6c038e73eb42670aa4e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa197261c87ee6c038e73eb42670aa4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa197261c87ee6c038e73eb42670aa4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa197261c87ee6c038e73eb42670aa4e::$classMap;

        }, null, ClassLoader::class);
    }
}
