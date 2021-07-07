<?php 
    include 'admin/connect/connect.php';
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cassia</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mob.css" />
</head>
<style>
    .form-pro-right-main input[type=text] {
        width: 83%;
    }

     .form-pro-right-main input[type=text] {
        width: 83%;
    }
</style>

<body>


    <div id="banner-main-pro-mqn-pro">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="list-tour.php">DANH SÁCH TOUR</a></li>
                        <li><a href="about.php">GIỚI THIỆU</a></li>
                        <li><a href="contact.php">LIÊN HỆ</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <div class="text-save-pro-mqn-main-pro">
                <h1>Tour du lịch vòng quanh thế giới</h1>
                <h3 style="margin-bottom:30px">Tiết kiệm tới 40% cho mùa hè sắp tới</h3>
                <a href="">Đặt vé ngay</a>
            </div>
        </div>
    </div>


<div id="banner-our-pro-mqn-provide2">
        <div class="container">
            <div class="titt-banner-our-pro-mqn-provide">

                <h1 style="color:black;">Gói tour mới nhất</h1>
            </div>
            <?php	
                  $sotin1trang = 3;
                    if (isset($_GET["trang"])) {
                        $trang = $_GET["trang"];
                        @settype($trang,"init");
                    }else{
                        $trang = 1;
                    }				
                    $from = ($trang -1) * $sotin1trang;
                    $query = mysql_query("SELECT * FROM posttour  ORDER BY ID DESC LIMIT $from , $sotin1trang");
                        while ($row = mysql_fetch_array($query)) {
            ?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="item-pro-dubai-mqn-tour">
                    <div class="item-pro-by-air">
                        <img src="img/icon5.png" alt="">
                        <p><?php echo $row['chauluc'] ?></p>
                    </div>
                    <div class="img-tour-pro-banner-provide-main">
                        <a href="detail-tour.php?id=<?php echo $row['id'] ?>"><img src="img/<?php echo $row['avata'] ?>" alt="" height="300px"></a>
                    </div>
                    <div class="item-text-detail-pro-mqn-main">
                        <div class="item-text-left-pro-mqn">
                            <h1><?php echo substr($row['title'],0,25) ?>...</h1>
                            <p>Hãy là người nhanh tay săn những vé tour rẻ nhất mọi thời đại , hơn 10 năm uy tín với du
                                dịch , hứa hẹn sẽ không làm bạn thất vọng !</p>
                        </div>
                        <div class="item-price-days-pro-right-mqn">
                            <h4>$<?php echo $row['price'] ?></h4>
                            <p><span style="color:#ef5b5b;">*</span><?php echo $row['thoigian'] ?></p>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="rating-pro-mqn-main-pro">
                                <p>Đánh giá : </p>
                                <img src="img/icon1.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php 
                        }
            ?>
        </div>
    </div>
    <div id="convenience-pro-banner-mqn-main">
        <div class="container">
            <div class="item-pro-1-conveniece-banner">
                <h1>Tại sao chọn chúng tôi</h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="item-quangcao-hotel-pro-mqn-main">
                    <img src="img/icon2.png" alt="">
                    <h4>Khách hàng hạnh phúc</h4>
                    <p>Có rất nhiều công ty du lịch tự phục vụ là Công ty du lịch</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="item-quangcao-hotel-pro-mqn-main">
                    <img src="img/icon3.png" alt="">
                    <h4>Tour tuyệt vời của chúng tôi</h4>
                    <p>Có rất nhiều công ty du lịch tự phục vụ là Công ty du lịch</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="item-quangcao-hotel-pro-mqn-main">
                    <img src="img/icon4.png" alt="">
                    <h4>Trường hợp sắp xếp</h4>
                    <p>Có rất nhiều công ty du lịch tự phục vụ là Công ty du lịch</p>
                </div>
            </div>
        </div>
    </div>



    <div id="banner-our-pro-mqn-provide">
        <div class="container">
            <div class="titt-banner-our-pro-mqn-provide">
                <h1 style="color:black;">Gói tour phổ biến</h1>
            </div>
            <?php	
                  $sotin1trang = 3;
                    if (isset($_GET["trang"])) {
                        $trang = $_GET["trang"];
                        @settype($trang,"init");
                    }else{
                        $trang = 1;
                    }				
                    $from = ($trang -1) * $sotin1trang;
                    $query = mysql_query("SELECT * FROM posttour  ORDER BY ID ASC LIMIT $from , $sotin1trang");
                        while ($row = mysql_fetch_array($query)) {
            ?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="item-pro-dubai-mqn-tour">
                    <div class="item-pro-by-air">
                        <img src="img/icon5.png" alt="">
                        <p><?php echo $row['chauluc'] ?></p>
                    </div>
                    <div class="img-tour-pro-banner-provide-main">
                        <a href="detail-tour.php?id=<?php echo $row['id'] ?>"><img src="img/<?php echo $row['avata'] ?>" alt="" height="300px"></a>
                    </div>
                    <div class="item-text-detail-pro-mqn-main">
                        <div class="item-text-left-pro-mqn">
                            <h1><?php echo substr($row['title'],0,25) ?>...</h1>
                            <p>Hãy là người nhanh tay săn những vé tour rẻ nhất mọi thời đại , hơn 10 năm uy tín với du
                                dịch , hứa hẹn sẽ không làm bạn thất vọng !</p>
                        </div>
                        <div class="item-price-days-pro-right-mqn">
                            <h4>$<?php echo $row['price'] ?></h4>
                            <p><span style="color:#ef5b5b;">*</span><?php echo $row['thoigian'] ?></p>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="rating-pro-mqn-main-pro">
                                <p>Đánh giá : </p>
                                <img src="img/icon1.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php 
                        }
            ?>
        </div>
    </div>




    <div id="banner-logo-doitac-pro-main-mqn2" style="margin-bottom: 4%;">
        <div class="container">
            <div class="item-pro-title-mqn-main-banner-logo">
                <h2 style="color:black;margin-bottom:3%;margin-top:3%">Đối tác xây dựng thương hiệu</h2>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-right: 3%;">
                <img src="img/icon16.png" alt="">
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-right: 3%;">
                <img src="img/icon17.png" alt="">
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-right: 3%;">
                <img src="img/icon18.png" alt="">
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-right: 3%;">
                <img src="img/icon19.png" alt="">
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-right: 3%;">
                <img src="img/icon20.png" alt="">
            </div>
        </div>
    </div>

    <div id="banner-sub-emailp-pro-mqn-main">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-pro-right-main">
				 <h2  style="margin-top:-5%;margin-bottom:2%;text-align:center;">ĐĂNG KÍ NHẬN THÔNG BÁO</h2>
                    <?php
                    if(isset($_POST['upload2'])){
                        $email = $_POST['email'];
                        $dateline = date('Y-m-d H:i:s');
                            $insert = mysql_query("INSERT INTO dangkitin(email,dateline)VALUES('$email','$dateline')")or die(mysql_errno());
                        if (isset($insert)) {
                        echo "Đăng kí nhận thông báo thành công!";
                                    }else{
                        echo "Đăng kí nhận thông báo thất bại!";
                                    }
                     }
                    ?>
				
                    <form action="" method="post">
                        <input type="text" name="email" value="" placeholder="Địa chỉ email của bạn" required>
                        <input type="submit" name="upload2" value="Đăngg kí" class="btn btn-default">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="banner-footer-pro-mqn-main">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="item-footer-pro-logo-about">
                    <img src="img/logo.png" alt="">
                    <p>Du lịch để tận hưởng cuộc sống và khám phá những vẻ đẹp của văn hóa xã hội, tự nhiên ngày nay đã trở thành nhu cầu của mỗi con người. Công ty cổ phần du lịch Việt Nam Cassia được thành lập từ năm 2021</p>
                </div>
                <div class="item-pro-address-footer-main">
                    <img src="img/icon21.png" alt="">
                    <p>+012 3456 789</p>
                    <img src="img/icon22.png" alt="">
                    <p>Trường đại học kinh doanh và công nghệ Hà Nội</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="item-main-menu-pro-mqn-footer">
                    <h1>DANH MỤC</h1>
                    <p><a href="index.php">TRANG CHỦ</a></p>
                    <p><a href="list-tour.php">DANH SÁCH TOUR</a></p>
                    <p><a href="about.php">GIỚI THIỆU</a></p>
                    <p><a href="contact.php">LIÊN HỆ</a></p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="item-main-menu-pro-mqn-footer">
                    <h1>MẠNG XÃ HỘI</h1>
                    <img src="img/icon23.png" alt="">
                    <p><a href="">facebook</a></p>
                    <img src="img/icon24.png" alt="">
                    <p><a href="">Twitter</a></p>
                    <img src="img/icon25.png" alt="">
                    <p><a href="">Instragram</a></p>
                    <img src="img/icon26.png" alt="">
                    <p><a href="">Linkedin</a></p>
                    <img src="img/icon27.png" alt="">
                    <p><a href="">+ Google</a></p>
                    <img src="img/icon28.png" alt="">
                    <p><a href="">Youtube</a></p>
                    <img src="img/icon29.png" alt="">
                    <p><a href="">Pinterest</a></p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="ista-gram-pro-mqn-main-pro">
                    <h1>HÌNH ẢNH</h1>
                    <ul>
                        <li><img src="img/img20.png" alt=""></li>
                        <li><img src="img/img21.png" alt=""></li>
                        <li><img src="img/img22.png" alt=""></li>
                        <li><img src="img/img23.png" alt=""></li>
                        <li><img src="img/img24.png" alt=""></li>
                        <li><img src="img/img25.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div id="copy-right-pro-mqn-main-pro">
        <div class="container">
            <p>Copyright © 2021 Cassia Group By sinh vien hubt</p>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/jquery1.12.4.min.js"></script>
    <script src="js/jquery-1.10.2.js"></script>
</body>

</html>