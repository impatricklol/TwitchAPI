<?php
//error_reporting(e_all);
/*
 *  Developed by Patrick Parker
 *  follow me on twitter @ twitter.com/ipaddey
 *  check out my github @ github.com/impatricklol
 *
 *  Any suggestions or issues or requests? feel free to contact me
 */

/**
 * Class twitchAPI
 * the twitchAPI class is used to make accessing twitch.tv's 'stream array data' easy for others.
 */
class twitchAPI{

    /**
     * @var Twitch.tv API URL
     */
    private $api_url;
    /**
     * @var stream data array
     */
    private $stream_data;
    /**
     * @var streamTitle, not currently used
     */
    public $streamTitle;

    /**
     * @param $twitch parse stream name in the initial call of function 'new twitchAPI('StreamName');
     */
    public function __construct($twitch){
        $this->api_url = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams?channel=' . $twitch), true);
    }

    /**
     * @param $data_type
     * choose data type from array, for example:
     * game - current game being played
     * display_name - stream username
     * status - current stream 'title'
     */
    public function getData($data_type){

        foreach($this->api_url['streams'] as $this->stream_data){

            if($this->stream_data['_id'] !=null){
                $this->streamTitle = $this->stream_data['channel'][$data_type];
                echo $this->streamTitle;

            }
        }
    }
}