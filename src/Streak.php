<?php
/**
 *
 * @package     Streak
 * @version     1.0.1
 * @author      Frank Keulen
 * @license     MIT License
 * @copyright   2015 Frank Keulen
 * @link        http://github.com/xvize/streak
 */

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
