<?php
/**
 * Created by PhpStorm.
 * User: MONSTER
 * Date: 10/08/2018
 * Time: 09.00
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

$couriers = new AfterShip\Couriers($key);
$trackings = new AfterShip\Trackings($key);
$last_check_point = new AfterShip\LastCheckPoint($key);

$trackings = new AfterShip\Trackings($key);

$ni = $_GET['ni'];
//var_dump($ni);
$response = $trackings->getById($ni);
$datas = json_encode($response, JSON_PRETTY_PRINT);
$decode =  json_decode($datas,true);
$notrack = $decode['data']['tracking']['tracking_number'];

header("Location: https://ariefsetya57gma.aftership.com/$notrack", true, 301);
exit();
