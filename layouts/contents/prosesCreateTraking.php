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

$key = '80a31524-539c-4ef2-9f56-68ec51456334';
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
    'title'    => 'title',
    'slug'    => $slug,
    'lang'    => 'id',
    'customer_name'    => $customer_name,
    'emails'    => $email,
    'order_id'    => $OrderID,
    'note'    => $note,
];
$response = $trackings->create($NoTrak, $tracking_info);


header("Location: http://localhost:81/traking/layouts/contents/tabelresi.php", true, 301);
exit();

//try {
//    $response = $trackings->all();
//
//} catch (AfterShipException $e) {
//    echo $e->getMessage();
//}

//echo json_encode($response, JSON_PRETTY_PRINT);

?>
