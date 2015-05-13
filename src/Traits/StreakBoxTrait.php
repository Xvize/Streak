<?php
namespace Xvize\Streak\Traits;

/**
 * StreakFunctions
 *
 */
trait StreakBoxTrait
{
    function createBox($pipelineKey, $name, $stageKey = "")
    {
        $box = $this->curl('pipelines/'.$pipelineKey.'/boxes');
        return $box->create(['name' => $name]);
    }

    function getBoxByKey($boxKey)
    {
        $box = $this->curl('boxes'.'/'.$boxKey);
        return $box->get();
    }

    function deleteBoxByKey($boxKey){
        $box = $this->curl('boxes'.'/'.$boxKey);
        return $box->delete();
    }

    function updateBoxByKey($boxKey, $data = []){
        $box = $this->curl('boxes'.'/'.$boxKey);
        return $box->update($data);
    }

    function getAllBoxes(){
        $box = $this->curl('boxes');
        return $box->get();
    }

    function getAllPipelineBoxes($pipelineKey){
        $box = $this->curl('pipelines/'.$pipelineKey.'/boxes');
        return $box->get();
    }



}







