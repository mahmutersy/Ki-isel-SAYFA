<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52c1c74a2631aae07fcdaddeca0b6f25
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit52c1c74a2631aae07fcdaddeca0b6f25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52c1c74a2631aae07fcdaddeca0b6f25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52c1c74a2631aae07fcdaddeca0b6f25::$classMap;

        }, null, ClassLoader::class);
    }
}
