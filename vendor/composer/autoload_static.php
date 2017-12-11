<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02438c14f1b40ee66e5b1857d4820d14
{
    public static $files = array (
        'e5c2e91d4cae96706c74cb17debba0e5' => __DIR__ . '/../..' . '/yyf/lib/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yyf\\' => 4,
        ),
        's' => 
        array (
            'system\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yyf\\' => 
        array (
            0 => __DIR__ . '/../..' . '/yyf',
        ),
        'system\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02438c14f1b40ee66e5b1857d4820d14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02438c14f1b40ee66e5b1857d4820d14::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}