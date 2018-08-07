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
//$NoTrak = $_GET['notrakking'];
//$slug = $_GET['slug'];
//$title = $_GET['title'];

$couriers = new AfterShip\Couriers($key);
$trackings = new AfterShip\Trackings($key);
$last_check_point = new AfterShip\LastCheckPoint($key);

$trackings = new AfterShip\Trackings($key);
$params = array(
    'smses'             => [],
    'emails'            => [],
    'title'             => '',
    'customer_name'     => '',
    'order_id'          => '',
    'order_id_path'     => '',
    'custom_fields'     => []
);
$response = $trackings->updateById('53df4a90868a6df243b6efd8', $params);

try {
    $response = $trackings->all();
} catch (AfterShipException $e) {
    echo $e->getMessage();
}

echo json_encode($response, JSON_PRETTY_PRINT);

?>