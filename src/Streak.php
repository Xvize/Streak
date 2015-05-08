<?php
namespace Xvize\Streak;

use Xvize\Streak\StreakFunctions;

/**
 * Streak
 *
 */
class Streak
{
    use StreakFunctions;

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/streak.php' => config_path('streak.php'),
        ]);

    }
}
