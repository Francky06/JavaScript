<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bb96b055ef34c2e8220269ae7522907
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classe',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bb96b055ef34c2e8220269ae7522907::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bb96b055ef34c2e8220269ae7522907::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
