<?php

namespace App;

use Slim\App;

/**
 * Application setup class.
 *
 * This defines the bootstrapping logic and middleware layers you
 * want to use in your application.
 */
final class Startup
{
    /**
     * Boostrap.
     *
     * @return App The Slim app
     */
    public static function boostrap(): App
    {
        return require __DIR__ . '/../config/bootstrap.php';
    }
}
