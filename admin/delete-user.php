<?php
	//kết nối cơ sở dữ liệu.
	include ("connect/connect.php");
	@$id = $_GET['id'];
	$delete = mysql_query("DELETE FROM userorder WHERE id='$id'");
		if($delete){
			@header('location:user-order-tour.php');
			}else{
			echo "Xóa bài thất bại";
			}



?>
