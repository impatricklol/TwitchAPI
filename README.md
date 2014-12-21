TwitchAPI
=========

Simple PHP Class for the Twitch.tv API

How to use:

replace 'reckful' with the stream name you want data from.
```php
include 'twitchAPI.php';
$twitch = new twitchAPI('reckful');
$twitch->getData('display_name');
$twitch->getData('game');
```
if you would like to get data from multiple streams it would be used like:
```php
include 'twitchAPI.php';
$stream_1 = new twitchAPI('reckful');
$stream_2 = new twitchAPI('sodapoppin');
$stream_1->getData('display_name');
$stream_2->getData('display_name');
```
NOTE:
No data will output if stream is offline, there is nothing wrong with the PHP code running on PHP V 5.6.2
