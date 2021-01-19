<?php
require( '../../autoload.php');
require( '../../src/AfterShipException.php' );
require( '../../src/BackwardCompatible.php' );
require( '../../src/Couriers.php' );
require( '../../src/LastCheckPoint.php' );
require( '../../src/Notifications.php' );
require( '../../src/Requestable.php' );
require( '../../src/Request.php' );
require( '../../src/Trackings.php');

use \AfterShip\AfterShipException;

$key = '80a31524-539c-4ef2-9f56-68ec51456334';

$couriers = new AfterShip\Couriers($key);
$trackings = new AfterShip\Trackings($key);
$last_check_point = new AfterShip\LastCheckPoint($key);

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
                <a href=\"index.html\" class=\"logo\"><i class=\"icon-magnet icon-c-logo\"></i><span><img src=\"../assets/images/logostsrs.png\" width=\"30%\"></span></a>
            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"\">
                    <ul class=\"nav navbar-nav navbar-right pull-right\">
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>

    <!-- ========== Left Sidebar start ========== -->

    <div class=\"left side-menu\">
        <div class=\"sidebar-inner slimscrollleft\">
            <div id=\"sidebar-menu\">
                <ul>

                    <li class=\"text-muted menu-title\">Navigation</li>

                    <li>
                        <a href=\"formCreate.php\" class=\"waves-effect\"><i class=\"ti-pencil-alt\"></i> <span> Tambah Data </span> </a>
                    </li>

                    <li>
                        <a href=\"tabelresi.php\" class=\"waves-effect\"><i class=\"ti-menu-alt\"></i> <span> Table Traking </span> </a>
                    </li>

                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <!-- ========== Left Sidebar end ========== -->

    <!-- ========== main content start ========== -->
    <div class=\"content-page\">

        <!-- content -->
        <div class=\"content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"card-box\">
                            <h4 class=\"m-t-0 header-title\"><b>Form Tambah Data</b></h4>
                            <br>

                            <form action=\"prosesCreateTraking.php\">

                                <div class=\"form-group\">
                                    <label>Tracking Number*</label>
                                    <input type=\"text\" name=\"notrakking\"  placeholder=\"Enter No Trakking\" class=\"form-control\" id=\"notrakking\" required>
                                </div>

                                <div class=\"form-group\">
                                    <label>Slug</label>
                                    <select name=\"slug\" class=\"form-control\" required>
                                        <option></option>
                                        <option value=\"$dskurir168\">$dmkurir168</option>
                                        <option value=\"$dskurir84\">$dmkurir84</option>
                                        <option value=\"$dskurir169\">$dmkurir169</option>
                                        <option value=\"$dskurir115\">$dmkurir115</option>
                                        <option value=\"$dskurir123\">$dmkurir123</option>
                                        <option value=\"$dskurir56\">$dmkurir56</option>
                                        <option value=\"$dskurir334\">$dmkurir334</option>

                                    </select>
                                </div>

                                <div class=\"form-group\">
                                    <label>Customer Name</label>
                                    <input type=\"text\" name=\"cosname\"  placeholder=\"Enter Costomer Name\" class=\"form-control\" id=\"notrakking\">
                                </div>

                                <div class=\"form-group\">
                                    <label>Customer Email</label>
                                    <input type=\"text\" name=\"email\"  placeholder=\"Enter Customer Email\" class=\"form-control\" id=\"notrakking\">
                                </div>

                                <div class=\"form-group\">
                                    <label>Order ID</label>
                                    <input type=\"text\" name=\"OrderID\"  placeholder=\"Enter Order ID\" class=\"form-control\" id=\"notrakking\">
                                </div>

                                <div class=\"form-group\">
                                    <label>Note</label>
                                    <textarea class=\"form-control\" name=\"note\"></textarea>
                                </div>

                                <div class=\"form-group text-right m-b-0\">
                                    <button class=\"btn btn-primary waves-effect waves-light\" type=\"submit\">
                                        Create
                                    </button>
                                    <button type=\"reset\" class=\"btn btn-default waves-effect waves-light m-l-5\">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
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
<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src=\"../assets/js/jquery.min.js\"></script>
<script src=\"../assets/js/bootstrap.min.js\"></script>
<script src=\"../assets/js/detect.js\"></script>
<script src=\"../assets/js/fastclick.js\"></script>
<script src=\"../assets/js/jquery.slimscroll.js\"></script>
<script src=\"../assets/js/jquery.blockUI.js\"></script>
<script src=\"../assets/js/waves.js\"></script>
<script src=\"../assets/js/wow.min.js\"></script>
<script src=\"../assets/js/jquery.nicescroll.js\"></script>
<script src=\"../assets/js/jquery.scrollTo.min.js\"></script>


<script src=\"../assets/js/jquery.core.js\"></script>
<script src=\"../assets/js/jquery.app.js\"></script>



</body>
</html>"
?>
