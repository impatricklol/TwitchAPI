<?php
error_reporting(e_all);

class twitchAPI{

    private $api_url;
    private $stream_data;
    public $streamTitle;

    public function __construct($twitch){
        $this->api_url = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams?channel=' . $twitch), true);
    }

    public function getData($data_type){

        foreach($this->api_url['streams'] as $this->stream_data){

            if($this->stream_data['_id'] !=null){
                $this->streamTitle = $this->stream_data['channel'][$data_type];
                echo $this->streamTitle;

            }
        }
    }
}