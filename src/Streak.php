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

    public function __call($method_name, $args){
        $class = self::normalize($method_name);
        return self::resolve($class);
    }

    public function resolve($class_name){
        if(class_exists($class_name))
            return new $class_name($this->requester);
        throw new Exception("{$class_name} not found");
    }

    public function normalize($arg){
        return __NAMESPACE__.'\\'.ucfirst($arg);
    }
}
