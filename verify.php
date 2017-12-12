<?php
$access_token = 'BsV7EU1YvzdPMjCUJJXJpNhG6awBuw1zgIwGKNSb2OwV3Ql43DsouH9ZrSWI3/uh78rRdg/iFeaSNKAqxLlqSiAuHnMH0gGuaI7C+tnPnO4x2nj2V/fZ32RtsZ2GIlNslPM0TKKatp6JrJFd38DlEwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
