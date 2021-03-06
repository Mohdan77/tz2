<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0685c0c7191c19bad3713baf2980be4a
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Introvert\\' => 10,
        ),
        'A' => 
        array (
            'Amo\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Introvert\\' => 
        array (
            0 => __DIR__ . '/..' . '/mahatmaguru/intr-sdk-test/src',
        ),
        'Amo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0685c0c7191c19bad3713baf2980be4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0685c0c7191c19bad3713baf2980be4a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
