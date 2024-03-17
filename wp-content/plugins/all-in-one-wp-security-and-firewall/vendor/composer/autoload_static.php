<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36e711f8003e7f0db09bfe0162c33492
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IPLib\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IPLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/mlocati/ip-lib/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36e711f8003e7f0db09bfe0162c33492::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36e711f8003e7f0db09bfe0162c33492::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36e711f8003e7f0db09bfe0162c33492::$classMap;

        }, null, ClassLoader::class);
    }
}
