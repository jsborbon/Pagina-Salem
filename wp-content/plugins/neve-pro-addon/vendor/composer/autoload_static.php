<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb475218d05cb7666f7494a46cd04150
{
    public static $files = array (
        '9db40b6ab5393a6e86e41b56f8af779c' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitfb475218d05cb7666f7494a46cd04150::$classMap;

        }, null, ClassLoader::class);
    }
}
