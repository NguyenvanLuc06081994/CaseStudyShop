<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c45f14758ae27bc6ceb74259a42c72b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c45f14758ae27bc6ceb74259a42c72b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c45f14758ae27bc6ceb74259a42c72b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
