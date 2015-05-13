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

use Xvize\Streak\Traits\StreakBoxTrait;
use Xvize\Streak\Traits\StreakEmailFilterTrait;
use Xvize\Streak\Traits\StreakPipelineTrait;
use Xvize\Streak\Traits\StreakSearchTrait;
use Xvize\Streak\Traits\StreakStageTrait;

use Xvize\Streak\Streak\StreakCurl;


/**
 * Streak
 *
 */
class Streak
{
    use StreakBoxTrait, StreakSearchTrait, StreakPipelineTrait,
        StreakEmailFilterTrait, StreakStageTrait, StreakFieldTrait;

    private $apikey;

    function __construct($apikey, $baseurl)
    {
        $this->apikey = $apikey;
        $this->baseurl = $baseurl;
    }

    private function getURL($urlSegment){
        return $this->baseurl.$urlSegment;
    }

    private function curl($urlSegment){
        return new StreakCurl($this->getUrl($urlSegment), $this->apikey);
    }

}
