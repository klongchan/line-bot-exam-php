<?php



require "vendor/autoload.php";

$access_token = 'OEEClWngIWeKNxZCyuAMUZrGr1nwSAAPw2YYP0sIT0kLByOxvjHv1K4vZ5fb5HiJWV3XiPzyvM2pvkk/VjKzsdMyns6/RwYuNX8lh1IcEbC5igL8yjbqlqtETUmFC+kxCpZ3ZoAoWmm9M/I9cMRRAQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6f82f5b967bf535adb280873ccdc3fbb';

$pushID = '';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage('', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







