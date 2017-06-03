<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e151a57f6ab5b3a9790261a5b2f0969
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'P' => 
        array (
            'Predis\\' => 7,
        ),
        'L' => 
        array (
            'Latrell\\Alipay\\' => 15,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Filesystem\\' => 22,
            'Illuminate\\Events\\' => 18,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
            'Illuminate\\Config\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'Latrell\\Alipay\\' => 
        array (
            0 => __DIR__ . '/..' . '/latrell/alipay/src/Latrell/Alipay',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/filesystem',
        ),
        'Illuminate\\Events\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/events',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Illuminate\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/config',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e151a57f6ab5b3a9790261a5b2f0969::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e151a57f6ab5b3a9790261a5b2f0969::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1e151a57f6ab5b3a9790261a5b2f0969::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
