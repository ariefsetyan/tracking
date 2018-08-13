<?php
/**
 * Created by PhpStorm.
 * User: MONSTER
 * Date: 04/08/2018
 * Time: 22.01
 */
require ('../../autoload.php');
require( '../../src/AfterShipException.php' );
require( '../../src/BackwardCompatible.php' );
require( '../../src/Couriers.php' );
require( '../../src/LastCheckPoint.php' );
require( '../../src/Notifications.php' );
require( '../../src/Requestable.php' );
require( '../../src/Request.php' );
require('../../src/Trackings.php');

use \AfterShip\AfterShipException;

$key = 'b4ccc46a-fbbd-4f0c-913b-9b5e74e71362';
$NoTrak = $_GET['notrakking'];
$slug = $_GET['slug'];
$customer_name = $_GET['cosname'];
$email = $_GET['email'];
$OrderID = $_GET['OrderID'];
$note = $_GET['note'];

$couriers = new AfterShip\Couriers($key);
$trackings = new AfterShip\Trackings($key);
$last_check_point = new AfterShip\LastCheckPoint($key);

$trackings = new AfterShip\Trackings($key);
$tracking_info = [
    'title'    => $title,
    'slug'    => $slug,
    'lang'    => 'id',
    'customer_name'    => $customer_name,
    'emails'    => $email,
    'order_id'    => $OrderID,
    'note'    => $note,
];
$response = $trackings->create($NoTrak, $tracking_info);


header("Location: http://localhost:8080/kp/traking/sdk/vendor/aftership/aftership-php-sdk/layouts/contents/tabelresi.php", true, 301);
exit();

//try {
//    $response = $trackings->all();
//
//} catch (AfterShipException $e) {
//    echo $e->getMessage();
//}

//echo json_encode($response, JSON_PRETTY_PRINT);

?>