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
//$tracking_info = [
//    'slug'    => 'jne',
//    'lang'   => 'id',
//];
////$response = $trackings->create('030360029399718', $tracking_info);

//$response = $trackings->get('jne', '030360029399718', array('lang'=>'id'));

//$response = $trackings->get('jne', 'RA123456789US', array('title','order_id'));

$response = $trackings->get('jne', '030360029399718', array('fields' => 'title,order_id,tracking_number'));
//    $response = $trackings->all();
//$response = null;

//$notifications = new AfterShip\Notifications('AFTERSHIP_API_KEY');
//$response = $notifications->get('jne', '0031630020436318');

//try {
//    $response = $trackings->all();
//} catch (AfterShipException $e) {
//    echo $e->getMessage();
//}

$datas = json_encode($response, JSON_PRETTY_PRINT);
$decode =  json_decode($datas, true);

var_dump($decode);
//for ($i=0;$i<count($decode);$i++){
//    echo $decode[3]['']."<br>";
//}
foreach ($decode as $data){
    echo implode($data);
//    echo implode($data->);

}

?>
