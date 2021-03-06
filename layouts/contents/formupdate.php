<?php
/**
 * Created by PhpStorm.
 * User: MONSTER
 * Date: 09/08/2018
 * Time: 13.24
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

$couriers = new AfterShip\Couriers($key);
$response = $couriers->all();

$datas = json_encode($response, JSON_PRETTY_PRINT);
$decode =  json_decode($datas,true);

$dskurir84 = $decode['data']['couriers'][84]['slug'];
$dmkurir84 = $decode['data']['couriers'][84]['name'];
$dskurir169 = $decode['data']['couriers'][169]['slug'];
$dmkurir169 = $decode['data']['couriers'][169]['name'];
$dskurir115 = $decode['data']['couriers'][115]['slug'];
$dmkurir115 = $decode['data']['couriers'][115]['name'];
$dskurir123 = $decode['data']['couriers'][123]['slug'];
$dmkurir123 = $decode['data']['couriers'][123]['name'];
$dskurir56 = $decode['data']['couriers'][56]['slug'];
$dmkurir56 = $decode['data']['couriers'][56]['name'];
$dskurir334 = $decode['data']['couriers'][334]['slug'];
$dmkurir334 = $decode['data']['couriers'][334]['name'];
$dskurir168 = $decode['data']['couriers'][168]['slug'];
$dmkurir168 = $decode['data']['couriers'][168]['name'];

$ni = $_GET['ni'];
$response = $trackings->getById($ni);
//var_dump($response);die();

$datas = json_encode($response, JSON_PRETTY_PRINT);
$decode =  json_decode($datas,true);
//print_r($decode);die();

$notrack = $decode['data']['tracking']['tracking_number'];
$slug = $decode['data']['tracking']['slug'];
echo
"<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <!--Morris Chart CSS -->
    <link rel=\"stylesheet\" href=\"../assets/plugins/morris/morris.css\">

    <link href=\"../assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../assets/css/core.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../assets/css/components.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../assets/css/pages.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../assets/css/responsive.css\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <script src=\"../assets/js/modernizr.min.js\"></script>

</head>
<body class=\"fixed-left\">

<!-- Begin page -->
<div id=\"wrapper\">

    <!-- Top Bar Start -->
    <div class=\"topbar\">
        <!-- LOGO -->
        <div class=\"topbar-left\">
            <div class=\"text-center\">

            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"\">
                    <ul class=\"nav navbar-nav navbar-right pull-right\">
                        <li class=\"dropdown hidden-xs\"></li>



                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar start ========== -->

<div class=\"left side-menu\">
    <div class=\"sidebar-inner slimscrollleft\">
        <!--- Divider -->
        <div id=\"sidebar-menu\">
            ...
        </div>
    </div>
</div>
<!-- ========== Left Sidebar end ========== -->

<!-- ========== main content start ========== -->
<div class=\"content-page\">

    <!-- content -->
    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"card-box\">
                    <h4 class=\"m-t-0 header-title\"><b>Form Update</b></h4>

                    <form action=\"updatetrakking.php\" data-parsley-validate novalidate>
                        <input type=\"text\" name=\"id\" parsley-trigger=\"change\" required value=\"$ni\" class=\"form-control\" id=\"notrakking\">
                        <div class=\"form-group\">
                            <label>No Trakking*</label>
                            <input type=\"text\" name=\"notrakking\" parsley-trigger=\"change\" required value=\"$notrack\" class=\"form-control\" id=\"notrakking\">
                        </div>
                        <div class=\"form-group\">
                            <label>Slug</label>
                            <select name=\"slug\" class=\"form-control\">
                                <!--<option value=\"JNE\">JNE</option>-->
                                <option value=\"$slug\">$slug</option>
//                                <!--<option value=\"UPS\">UPS</option>-->
                            </select>

                        </div>
                        <div class=\"form-group\">
                            <label>costomer name</label>
                            <input type=\"text\" name=\"cname\" parsley-trigger=\"change\" required class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>email</label>
                            <input type=\"text\" name=\"email\" parsley-trigger=\"change\" required class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>note</label>
                            <input type=\"text\" name=\"note\" parsley-trigger=\"change\" required class=\"form-control\">
                        </div>

                        <div class=\"form-group text-right m-b-0\">
                            <button class=\"btn btn-primary waves-effect waves-light\" type=\"submit\">
                                Update
                            </button>
                            <button type=\"reset\" class=\"btn btn-default waves-effect waves-light m-l-5\">
                                Cancel
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

        <!-- content -->

        <!-- footer -->
        <footer class=\"footer\">
            2015 © Ubold.
        </footer>
    </div>

    <!-- ========== main content end ========== -->

</div>
<!-- scripts -->
...

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
<script src=\"assets/js/detect.js\"></script>
<script src=\"assets/js/fastclick.js\"></script>
<script src=\"assets/js/jquery.slimscroll.js\"></script>
<script src=\"assets/js/jquery.blockUI.js\"></script>
<script src=\"assets/js/waves.js\"></script>
<script src=\"assets/js/wow.min.js\"></script>
<script src=\"assets/js/jquery.nicescroll.js\"></script>
<script src=\"assets/js/jquery.scrollTo.min.js\"></script>

<script src=\"assets/plugins/peity/jquery.peity.min.js\"></script>

<!-- jQuery  -->
<script src=\"assets/plugins/waypoints/lib/jquery.waypoints.js\"></script>
<script src=\"assets/plugins/counterup/jquery.counterup.min.js\"></script>



<script src=\"assets/plugins/morris/morris.min.js\"></script>
<script src=\"assets/plugins/raphael/raphael-min.js\"></script>

<script src=\"assets/plugins/jquery-knob/jquery.knob.js\"></script>

<script src=\"assets/pages/jquery.dashboard.js\"></script>

<script src=\"assets/js/jquery.core.js\"></script>
<script src=\"assets/js/jquery.app.js\"></script>

<script type=\"text/javascript\">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(\".knob\").knob();

    });
</script>

</body>
</html>"
?>


