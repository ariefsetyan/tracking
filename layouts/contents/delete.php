<?php
/**
 * Created by PhpStorm.
 * User: MONSTER
 * Date: 09/08/2018
 * Time: 22.59
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

$couriers = new AfterShip\Couriers($key);
$trackings = new AfterShip\Trackings($key);
$last_check_point = new AfterShip\LastCheckPoint($key);

$trackings = new AfterShip\Trackings($key);

$ni = $_GET['ni'];
//var_dump($ni);
$response = $trackings->deleteById($ni);

header("Location: http://localhost:8080/kp/traking/sdk/vendor/aftership/aftership-php-sdk/layouts/contents/tabelresi.php", true, 301);
exit();


