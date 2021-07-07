<?php 
    include('connect/connect.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Admin Cassia</title>
    <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
    <meta name="viewport" content="width=device-width">
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/Font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/prettify.css" />

    <link type="text/css" rel="stylesheet" href="assets/validation-engine/css/validationEngine.jquery.css" />

    <link rel="stylesheet" href="assets/css/theme.css">

    <script type="text/javascript" src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 7]>
        <link type="text/css" rel="stylesheet" href="assets/Font-awesome/css/font-awesome-ie7.min.css"/>
        <![endif]-->
</head>
<style>
    h1{
        color:white;
    }
</style>
<body>
    <!-- #wrap -->
    <div id="wrap">
        <!-- #top -->
        <div id="top">
            <!-- .navbar -->
            <div class="navbar navbar-inverse navbar-static-top">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="index.html">Travel Cassia</a>
                        <!-- /.topnav -->
                        <div class="nav-collapse collapse">
                            <!-- .nav -->
                            <ul class="nav">
                                <li><a href="post-tour.php">Thêm tour</a></li>
                                <li><a href="view-tour.php">Danh sách tour</a></li>
                                <li><a href="user-order-tour.php">Danh sách hóa đơn</a></li>
                                <li><a href="view-phanhoi.php">Phản hồi ý kiến</a></li>
                                <li><a href="view-dangkitin.php">Danh sách đăng kí nhận thông báo</a></li>
                            </ul>
                            <!-- /.nav -->
                            <a href="login.php" style="float:right;color:red;margin-top:10px">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.navbar -->
        </div>
        <!-- END TOP BAR -->


        <!-- #content -->
       <h1>Xin chào :  <?php 
                if (isset($_GET['admin'])) {
                        if($_GET['admin'] =='admin'){
                                    Echo 'admin';
                                }
                        }else {
                            header ("location:login.php");
                            exit;
                            }
        
            
                ?></h1>
        <!-- /#content -->
        <!-- #push do not remove -->
        <div id="push"></div>
        <!-- /#push -->
    </div>
    <!-- /#wrap -->

    <div class="clearfix"></div>
    <div id="footer">
        <p>2021 © Sinh vien HUBT</p>
    </div>



    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('txtDescription' ,{ 
    });
  </script>
</body>

</html>