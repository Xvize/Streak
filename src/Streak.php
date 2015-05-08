<?php

namespace Xvize\Streak;

use Jyggen\Curl;

/**
 * Streak
 *
 */
class Streak
{
    /**
     * If true, then environment variables will not be overwritten
     * @var bool
     */
    protected static $immutable = true;

    /**
     * Load `.env` file in given directory
     */
    public static function load($path, $file = '.env')
    {

    }
}
