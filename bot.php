<?php
$access_token = 'F1V3cS8uSreEkevMMvJRfyxWkwyiJW4BVu4u1A71MHamNKmrYnoGgXTT6of2KVvaQwz4AUp8TNAjhtm8lk4789p6pO3F9R8Q1/IaTudK4fOr1iSN9+rT5UPBiebaSa0+y4GuJJMpPMZy1M0/QEPOUAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;