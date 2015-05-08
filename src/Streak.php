<?php

namespace Xvize\Streak;

/**
 * Streak
 *
 */
class Streak
{

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/streak.php' => config_path('streak.php'),
        ]);

    }
}
