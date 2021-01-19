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
$ni = $_GET['id'];
$NoTrak = $_GET['notrakking'];
$slug = $_GET['slug'];
$email = $_GET['email'];
$name = $_GET['cname'];
$note = $_GET['note'];
//$title = $_GET['title'];

$couriers = new AfterShip\Couriers($key);
$trackings = new AfterShip\Trackings($key);
$last_check_point = new AfterShip\LastCheckPoint($key);

$trackings = new AfterShip\Trackings($key);
$params = array(
    'tracking_number'=>$NoTrak,
    'slug'=>$slug,
//    'smses'             => [],
    'emails'            => [$email],
    'title'         => 'T1',
    'customer_name'     => $name,
    'note'     => $note,
//    'order_id'          => '',
//    'order_id_path'     => '',
//    'custom_fields'     => []
);
//var_dump($NoTrak);die();
$response = $trackings->updateById($ni, $params);

try {
    $response = $trackings->all();
} catch (AfterShipException $e) {
    echo $e->getMessage();
}

echo json_encode($response, JSON_PRETTY_PRINT);

?>
