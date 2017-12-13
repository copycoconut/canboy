<?php
	include 'vendor/autoload.php';
	$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('BsV7EU1YvzdPMjCUJJXJpNhG6awBuw1zgIwGKNSb2OwV3Ql43DsouH9ZrSWI3/uh78rRdg/iFeaSNKAqxLlqSiAuHnMH0gGuaI7C+tnPnO4x2nj2V/fZ32RtsZ2GIlNslPM0TKKatp6JrJFd38DlEwdB04t89/1O/w1cDnyilFU=');
	$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'be2ed33205650821566bcfd71e079b09']);
	$response = $bot->replyText('hello!');

?>
