<?php



require "vendor/autoload.php";

$access_token = 'ubyTb7feZK6Tq12qODF+PF1oYpyfYfUvst+rfE6qXCX0h+ApmjgCZUPrDE79lfF2e2taLkmVFLpNsGqk9aeLx7Fi23v6KzVpfBJfwD/wnxkwjfUCF9q8Wszn2zIXQmdbHyIvpkf2iIrGrX601724qAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '9117ef3d3b00c77d1bee5e7186585489';

$pushID = 'U29bd09938c894686293e4ab6194c8c7d';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('www.google.co.th');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







