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
        <div id="content">
            <!-- .outer -->
            <div class="container-fluid outer">
                <div class="row-fluid">
                    <!-- .inner -->
                    <div class="span12 inner">
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="box">
                                    <div id="collapse2" class="body collapse in">
                                        <h2 class="text-center">Sửa tour du lịch</h2>
                                        <?php
                                        if(isset($_GET['id']) && $id = $_GET['id']){
                                        $user = mysql_query("SELECT * FROM posttour WHERE id=$id");
                                        if(mysql_num_rows($user)>0){
                                            $array = mysql_fetch_array($user);
                                                        }
                                        if(isset($_POST['upload'])){
                                                $title = $_POST['title'];
                                                $chauluc = $_POST['chauluc'];
                                                $price = $_POST['price'];
                                                $dateline = date('Y-m-d H:i:s');
                                                $tinhtrang = $_POST['tinhtrang'];
                                                $noidung = $_POST['noidung'];
                                                @$avata = $_FILES['avata']['name'];
                                                @move_uploaded_file($avata_tmp , 'img/'.$avata);
                                                $thoigian = $_POST['thoigian'];
                                            $insert = mysql_query("UPDATE posttour SET title='$title',chauluc='$chauluc',price='$price',dateline='$dateline',tinhtrang='$tinhtrang',noidung='$noidung',avata='$avata',thoigian='$thoigian' WHERE id='$id'");
                                            if (isset($insert)) {
                                                echo "Sửa tour thành công!";
                                            }else{
                                                echo "Sửa tour sản phẩm thất bại!";
                                            }
                                                }
                                                }
                                        ?>
                                        <form action="edit-tour.php?id=<?php echo $array['id'] ?>" method="post" enctype="multipart/form-data"
                                            class="form-horizontal" id="popup-validation">
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="title"
                                                        placeholder="Tên tour" value="<?php echo $array['title'] ?>" required>
                                                    <input type="text" class="form-control" name="chauluc"
                                                        placeholder="Châu lục" value="<?php echo $array['chauluc'] ?>" required>
                                                    <input type="text" class="form-control" name="price"
                                                        placeholder="Giá tour" value="<?php echo $array['price'] ?>" required>
                                                    <input type="text" class="form-control" name="thoigian"
                                                        placeholder="Thời gian tour" value="<?php echo $array['thoigian'] ?>" required>
                                                    <input type="text" class="form-control" name="tinhtrang"
                                                        placeholder="Tình trạng tour" value="<?php echo $array['tinhtrang'] ?>" required>
                                                    <input type="file" class="form-control" name="avata" required>
                                                    <textarea name="noidung" id="txtDescription"><?php echo $array['noidung'] ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-actions no-margin-bottom">
                                                <input type="submit" name="upload" value="Sửa tour"
                                                    class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.row-fluid -->
            </div>
            <!-- /.outer -->
        </div>
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
        CKEDITOR.replace('txtDescription', {});
    </script>
</body>

</html>