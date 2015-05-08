<?php
namespace Xvize\Streak\Traits;

/**
 * StreakFunctions
 *
 */
trait StreakBoxTrait
{
    function createBox($name)
    {
        $box = $this->curl('boxes');
        return $box->create(['name' => $name]);
    }

    function getBoxById($id)
    {
        $box = $this->curl('boxes'.'/'.$id);
        return $box->get();
    }

    function getAllBoxes(){
        $box = $this->curl('boxes');
        return $box->get();
    }

}







