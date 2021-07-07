<?php 
    include('connect/connect.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html class="no-js">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tables</title>
    <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
    <meta name="viewport" content="width=device-width">
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/Font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="assets/css/DT_bootstrap.css" />
    <link rel="stylesheet" href="assets/css/responsive-tables.css">

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
        <!-- /#top -->
        <!-- .head -->
        <!-- #content -->
        <div id="content">
            <!-- .outer -->
            <div class="container-fluid outer">
                <div class="row-fluid">
                    <!-- .inner -->
                    <div class="span12 inner">
                        <hr>
                        <!-- .row-fluid -->
                        <div class="row-fluid">
                            <!-- .span12 -->
                            <div class="span12">
                                <div class="box">
                                    <header>
                                        <h5>Danh sách tour du lịch</h5>
                                    </header>
                                    <div id="stripedTable" class="body collapse in">
                                        <table class="table table-striped responsive">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>Tên tour</th>
                                                    <th>Châu lục</th>
                                                    <th>Giá tour</th>
                                                    <th>Tình trạng</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php					
                                                    $query = mysql_query("SELECT * FROM posttour  ORDER BY ID DESC");
                                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['title'] ?></td>
                                                    <td><?php echo $row['chauluc'] ?></td>
                                                    <td><?php echo number_format($row['price']) ?>$</td>
                                                    <td><?php echo $row['tinhtrang'] ?></td>
                                                    <td><a href="detail-tour.php?id=<?php echo $row['id'] ?>">Chi tiết</a> - <a href="edit-tour.php?id=<?php echo $row['id'] ?>">Sửa tour</a> - <a href="delete-tour.php?id=<?php echo $row['id'] ?>">Xóa tour</a></td>
                                                </tr>
                                                <?php 
                                                        }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.span12 -->
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
    <div id="footer">
        <p>2021 © Sinh vien HUBT</p>
    </div>

    <!-- #editModal -->
    <div id="editModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="editModalLabel"><i class="icon-edit"></i> Edit Table</h3>
        </div>
        <div class="modal-body">
            <div class="control-group">
                <label for="fName" class="control-label">First Name</label>
                <div class="controls">
                    <input type="text" id="fName" name="fName">
                </div>
            </div>
            <div class="control-group">
                <label for="lName" class="control-label">Last Name</label>
                <div class="controls">
                    <input type="text" id="lName" name="lName">
                </div>
            </div>
            <div class="control-group">
                <label for="uName" class="control-label">Username</label>
                <div class="controls">
                    <input type="text" id="uName" name="uName">
                </div>
            </div>
            <div class="form-actions">
                <button id="sbmtBtn" type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
            </div>
        </div>
        <div class="modal-footer">

            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    <!-- /#editModal -->

    


</body>

</html>