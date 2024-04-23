<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33d6d72e2c91c028542df116b15d3541
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33d6d72e2c91c028542df116b15d3541::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33d6d72e2c91c028542df116b15d3541::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33d6d72e2c91c028542df116b15d3541::$classMap;

        }, null, ClassLoader::class);
    }
}
