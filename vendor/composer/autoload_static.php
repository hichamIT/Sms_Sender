<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d6420d52c479a35c1af19f0d39a5260
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d6420d52c479a35c1af19f0d39a5260::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d6420d52c479a35c1af19f0d39a5260::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
