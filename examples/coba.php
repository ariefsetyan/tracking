<?php
$data= file_get_contents("https://pastebin.com/hDZd5ibK");
$data=json_decode($data,true);
echo "tracking_number : ".$decode[0]['data']['tracking']['tracking_number'];
