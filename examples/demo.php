<?php
//require(__DIR__ . '../autoload.php');
require ('../autoload.php');
require( '../src/AfterShipException.php' );
require( '../src/BackwardCompatible.php' );
require( '../src/Couriers.php' );
require( '../src/LastCheckPoint.php' );
require( '../src/Notifications.php' );
require( '../src/Requestable.php' );
require( '../src/Request.php' );
require('../src/Trackings.php');

use \AfterShip\AfterShipException;

$key = 'b4ccc46a-fbbd-4f0c-913b-9b5e74e71362';

$couriers = new AfterShip\Couriers($key);
$trackings = new AfterShip\Trackings($key);
$last_check_point = new AfterShip\LastCheckPoint($key);

$trackings = new AfterShip\Trackings($key);

//$couriers = new AfterShip\Couriers($key);

$response = $trackings->all();

//$response = $trackings->get('FedEx', 'RA12345678DFS');
//$response = $trackings->getById('5b67cbffdc0a9dac0b4d93ea', array('title','order_id'));
$datas = json_encode($response, JSON_PRETTY_PRINT);
$decode =  json_decode($datas,true);
print_r($decode);
//$jm = $decode['data']['count'];


for ($i=0;$i<$jm;$i++){
    echo $decode['data']['trackings'][$i]['tracking_number']."<br>";
    echo $decode['data']['trackings'][$i]['slug']."<br>";


//    for ($y=0;$y<$as;$y++){
//        echo $decode['data']['trackings'][$i]['checkpoints'][$y]['location']."<br>";
//        echo $decode['data']['trackings'][$i]['checkpoints'][$y]['message'];
//    }
}
























//$tracking_info = [
//    'slug'    => 'jne',
//    'lang'   => 'id',
//];
////$response = $trackings->create('030360029399718', $tracking_info);

//$response = $trackings->get('jne', '030360029399718', array('lang'=>'id'));

//$response = $trackings->get('jne', 'RA123456789US', array('title','order_id'));

//$response = $trackings->get('jne', '030360029399718', array('fields' => 'title,order_id,tracking_number'));
//    $response = $trackings->all();
//$response = null;


//try {
//    $response = $trackings->all();
//} catch (AfterShipException $e) {
//    echo $e->getMessage();
//}




//print_r($decode);
//echo "tracking_number : ".$decode[0]['data']['tracking']['tracking_number'];
//echo $decode->tracking[]

//echo "<br>";
//var_dump($decode);
//var_dump($response);
//for ($i=0;$i<count($decode);$i++){
//    echo $decode[3]['']."<br>";
//}
//foreach ($response as $data){
////    print_r($datas['fields']) ;
//    print_r($data);
////    echo ($data->tracking);
//
//}

?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--</body>-->
<!--</html>-->

