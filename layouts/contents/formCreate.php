
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>
<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">

            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown hidden-xs">


                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="../assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                            </ul>
                        </li>
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

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                ...
            </div>
        </div>
    </div>
    <!-- ========== Left Sidebar end ========== -->

    <!-- ========== main content start ========== -->
    <div class="content-page">

        <!-- content -->
        <div class="content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Basic Form</b></h4>
                        <p class="text-muted font-13 m-b-30">
                            Your awesome text goes here.
                        </p>

                        <form action="prosesCreateTraking.php" data-parsley-validate novalidate>
                            <div class="form-group">
                                <label>No Trakking*</label>
                                <input type="text" name="notrakking" parsley-trigger="change" required placeholder="Enter No Trakking" class="form-control" id="notrakking">
                            </div>
                            <div class="form-group">
                                <label>Title*</label>
                                <input type="text" name="title" parsley-trigger="change" required placeholder="Enter No Trakking" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                    <select name="slug" class="form-control">
                                        <option value="JNE">JNE</option>
                                        <option value="FedEx">FedEx</option>
                                        <option value="UPS">UPS</option>
                                    </select>

                            </div>
<!--                            <div class="form-group">-->
<!--                                <label>Lang*</label>-->
<!--                                <input id="lang" type="text" placeholder="Enter Lang" required class="form-control" name="lang">-->
<!--                            </div>-->

                            <div class="form-group text-right m-b-0">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                    Create
                                </button>
                                <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                    Cancel
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        <!-- content -->

        <!-- footer -->
        <footer class="footer">
            2015 © Ubold.
        </footer>
    </div>

    <!-- ========== main content end ========== -->

</div>
<!-- scripts -->
...


</body>
</html>

