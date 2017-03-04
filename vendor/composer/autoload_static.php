<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5045a843dd67d9d971c89aec66c5269b
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'I' => 
        array (
            'IDERConnect\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'IDERConnect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jlmsrl/ider-openid-client-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5045a843dd67d9d971c89aec66c5269b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5045a843dd67d9d971c89aec66c5269b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
