<?php



require "vendor/autoload.php";

$access_token = 'OEEClWngIWeKNxZCyuAMUZrGr1nwSAAPw2YYP0sIT0kLByOxvjHv1K4vZ5fb5HiJWV3XiPzyvM2pvkk/VjKzsdMyns6/RwYuNX8lh1IcEbC5igL8yjbqlqtETUmFC+kxCpZ3ZoAoWmm9M/I9cMRRAQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7b1ec2efb3d533ffd37440a0526b900c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







