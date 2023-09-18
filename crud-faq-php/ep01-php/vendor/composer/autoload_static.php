<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb5c673fef6146ca78b178eb3887d75c
{
    public static $files = array (
        '0dc8b47bcec358e8ba8f8fe0156a693a' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb5c673fef6146ca78b178eb3887d75c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb5c673fef6146ca78b178eb3887d75c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb5c673fef6146ca78b178eb3887d75c::$classMap;

        }, null, ClassLoader::class);
    }
}