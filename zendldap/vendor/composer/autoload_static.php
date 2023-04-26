<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3f5919d9cc486a3d5a6b7f6d1b2990b
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laminas\\Ldap\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laminas\\Ldap\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-ldap/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3f5919d9cc486a3d5a6b7f6d1b2990b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3f5919d9cc486a3d5a6b7f6d1b2990b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
