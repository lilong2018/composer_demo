<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69b802eb60d662c44b6b960a7d8ec103
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lilong\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lilong\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lilong',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69b802eb60d662c44b6b960a7d8ec103::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69b802eb60d662c44b6b960a7d8ec103::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
