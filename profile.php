<?php


$access_token = 'OEEClWngIWeKNxZCyuAMUZrGr1nwSAAPw2YYP0sIT0kLByOxvjHv1K4vZ5fb5HiJWV3XiPzyvM2pvkk/VjKzsdMyns6/RwYuNX8lh1IcEbC5igL8yjbqlqtETUmFC+kxCpZ3ZoAoWmm9M/I9cMRRAQdB04t89/1O/w1cDnyilFU=';

$userId = 'U7b1ec2efb3d533ffd37440a0526b900c';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

