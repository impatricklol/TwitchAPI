TwitchAPI
=========

Simple PHP Class for the Twitch.tv API

How to use:

replace 'reckful' with the stream name you want data from.
```php
<?php
include 'twitchAPI.php';
$twitch = new twitchAPI('reckful');
$twitch->getData('display_name');
$twitch->getData('game');
?>
```
if you would like to get data from multiple streams it would be used like:
```php
<?php
include 'twitchAPI.php';
$stream_1 = new twitchAPI('reckful');
$stream_2 = new twitchAPI('sodapoppin');
$stream_1->getData('display_name');
$stream_2->getData('display_name');
?>
```

getData Types:
each getData type is pulled from an array at twitch
Currently available data types:
  display_name - stream username
  status - current 'title' of the stream
  game - Current game being played
  
  
NOTE:
This API is not finished.. and more features will be added.. this script was built on
PHP V 5.6.2 if it doesn't work i suggest upgrading to this version :shit::tada:
