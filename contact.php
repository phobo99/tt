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
        #banner-footer-pro-mqn-main{
            margin-top: 0px;
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
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
                        <li><a href="index.php">TRANG CH???</a></li>
                        <li><a href="list-tour.php">DANH S??CH TOUR</a></li>
                        <li><a href="about.php">GI???I THI???U</a></li>
                        <li><a href="contact.php">LI??N H???</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <div class="text-save-pro-mqn-main-pro">
                <h1>Tour du l???ch v??ng quanh th??? gi???i</h1>
                <h3 style="margin-bottom:30px">Ti???t ki???m t???i 40% cho m??a h?? s???p t???i</h3>
                <a href="">?????t v?? ngay</a>
            </div>
        </div>
    </div>

    <div id="contact-pro-mqn-main-mocco">
        <div class="container">
            <div id="map">
            <script>
                function myMap() {
                    var myCenter = new google.maps.LatLng(20.9990705, 105.8762848, 17);
                    var mapCanvas = document.getElementById("map");
                    var mapOptions = {
                        center: myCenter,
                        zoom: 15
                    };
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                    var marker = new google.maps.Marker({
                        position: myCenter
                    });
                    marker.setMap(map);
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz_MYtF1Yo5-P-T2Hc0oHLgLL1XdXrJWc&callback=myMap"></script>>
        </div>
        <div class="form-main-contact-pro-mqn" style="margin-top:7%">
                <?php
                        if(isset($_POST['upload3'])){
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $phonenumber = $_POST['phonenumber'];
                        $noidung = $_POST['noidung'];
                        $dateline = date('Y-m-d H:i:s');
                            $insert = mysql_query("INSERT INTO phanhoi(username,email,phonenumber,noidung,dateline)VALUES('$username','$email','$phonenumber','$noidung','$dateline')")or die(mysql_errno());
                        if (isset($insert)) {
                        echo "Ph???n h???i ?? ki???n th??nh c??ng!";
                                    }else{
                        echo "Ph???n h???i ?? ki???n th???t b???i!";
                                    }
                    }
                ?>
				<h1 style="margin-top:3%;text-align:center;margin-bottom:3%;">Li??n h??? v???i ch??ng t??i</h1>
                <form action="" method="post">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" value="" name="username" placeholder="H??? & T??n" required>
                        <input type="email" value="" name="email" placeholder="?????a ch??? email" required>
                        <input type="number" value="" name="phonenumber" placeholder="S??? ??i???n tho???i c???a b???n" required>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <textarea name="noidung" id="" cols="30" rows="10" placeholder="N???i dung" required></textarea>
                        <input type="submit" name="upload3" value="G???I TIN NH???N">
                    </div>
                </form>
            </div>
        </div>
    </div>

       <div id="banner-logo-doitac-pro-main-mqn2" style="margin-bottom: 4%;">
        <div class="container">
            <div class="item-pro-title-mqn-main-banner-logo">
                <h2 style="color:black;margin-bottom:3%;margin-top:3%">?????i t??c x??y d???ng th????ng hi???u</h2>
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


    <div id="banner-footer-pro-mqn-main">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="item-footer-pro-logo-about">
                    <img src="img/logo.png" alt="">
                    <p>Du l???ch ????? t???n h?????ng cu???c s???ng v?? kh??m ph?? nh???ng v??? ?????p c???a v??n h??a x?? h???i, t??? nhi??n ng??y nay ???? tr??? th??nh nhu c???u c???a m???i con ng?????i. C??ng ty c??? ph???n du l???ch Vi???t Nam Cassia ???????c th??nh l???p t??? n??m 2021</p>
                </div>
                <div class="item-pro-address-footer-main">
                    <img src="img/icon21.png" alt="">
                    <p>+012 3456 789</p>
                    <img src="img/icon22.png" alt="">
                    <p>Tr?????ng ?????i h???c kinh doanh v?? c??ng ngh??? H?? N???i</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="item-main-menu-pro-mqn-footer">
                    <h1>DANH M???C</h1>
                    <p><a href="index.php">TRANG CH???</a></p>
                    <p><a href="list-tour.php">DANH S??CH TOUR</a></p>
                    <p><a href="about.php">GI???I THI???U</a></p>
                    <p><a href="contact.php">LI??N H???</a></p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="item-main-menu-pro-mqn-footer">
                    <h1>M???NG X?? H???I</h1>
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
                    <h1>H??NH ???NH</h1>
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
            <p>Copyright ?? 2021 Cassia Group By sinh vien hubt</p>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/jquery1.12.4.min.js"></script>
    <script src="js/jquery-1.10.2.js"></script>
</body>

</html>