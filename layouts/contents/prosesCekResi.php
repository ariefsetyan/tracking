<?php
////require(__DIR__ . '../autoload.php');
//require ('../../autoload.php');
//require( '../../src/AfterShipException.php' );
//require( '../../src/BackwardCompatible.php' );
//require( '../../src/Couriers.php' );
//require( '../../src/LastCheckPoint.php' );
//require( '../../src/Notifications.php' );
//require( '../../src/Requestable.php' );
//require( '../../src/Request.php' );
//require('../../src/Trackings.php');
//
//use \AfterShip\AfterShipException;
//
//$key = 'b4ccc46a-fbbd-4f0c-913b-9b5e74e71362';
//
//$couriers = new AfterShip\Couriers($key);
//$trackings = new AfterShip\Trackings($key);
//$last_check_point = new AfterShip\LastCheckPoint($key);
//
//$trackings = new AfterShip\Trackings($key);
//
//$response = $trackings->all();
//
//
//
//
//echo json_encode($response, JSON_PRETTY_PRINT);

$notrak = $_GET['cari'];
$url = 'https://ariefsetya57gma.aftership.com/'.$notrak;

header("Location: ".$url, true, 301);
exit();
?>