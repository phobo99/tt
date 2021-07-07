<?php 
    include('connect/connect.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/magic/magic.css">
    </head>
    <body>
        
        <div class="container">
            <div class="text-center">
               <h1>Travel Cassia</h1>
            </div>
            <div class="tab-content">
                <div id="login" class="tab-pane active">
                    
                    <form action="" method="post" class="form-signin">
                        <p class="muted text-center">
                        
                        </p>
                        <input type="text" name="username" placeholder="Tài khoản" class="input-block-level" required>
                        <input type="password" name="password" placeholder="Mật khẩu" class="input-block-level" required>
                        <input type="submit" name="submit" class="btn btn-large btn-primary btn-block" value="Đăng nhập" >
                    </form>
                </div>
            </div>
        </div> <!-- /container -->
        <?php
            $name ="admin";
            $pas = 123456;

            if (isset($_POST['submit'])){

            if ($name == $_POST['username'] && $pas == $_POST['password']) {

                header("location:index.php?admin=$name"); //đây là lệnh khai báo chuyển trang đối với form đăng nhập.

            } else {
                echo "<center><span style=color:red>Bạn vui lòng kiểm tra lại tài khoản !</span></center>";
                }
            }

         ?>
    </body>
</html>
