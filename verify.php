<?php
$access_token = 'OEEClWngIWeKNxZCyuAMUZrGr1nwSAAPw2YYP0sIT0kLByOxvjHv1K4vZ5fb5HiJWV3XiPzyvM2pvkk/VjKzsdMyns6/RwYuNX8lh1IcEbC5igL8yjbqlqtETUmFC+kxCpZ3ZoAoWmm9M/I9cMRRAQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
