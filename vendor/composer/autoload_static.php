<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6504a3e194b465e2b976949abcfbeef
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'redfox80\\Autoloader\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'redfox80\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/redfox80/php-autoloader-simple/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6504a3e194b465e2b976949abcfbeef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6504a3e194b465e2b976949abcfbeef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
