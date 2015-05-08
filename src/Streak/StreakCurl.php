<?php
namespace Xvize\Streak\Streak;

use Jyggen\Curl;

/**
 * StreakCurl
 *
 */
class StreakCurl
{
    private $request;

    public function __construct($url, $key){
        $this->request = new Request($url);
        $this->request->setOption(CURLOPT_USERPWD, $key);
    }

    private function update($data){

        $this->request->setOption(CURLOPT_CUSTOMREQUEST, 'PUT');
        $this->request->setOption(CURLOPT_POSTFIELDS, http_build_query($data));

        $this->request->execute();

        return $this->request;

    }

    private function create(){


    }

    private function get(){

        $this->request->setOption(CURLOPT_CUSTOMREQUEST, 'GET');

        return $this->request;

    }

    private function delete(){


    }

}