<?php
	//kết nối cơ sở dữ liệu.
	include ("connect/connect.php");
	@$id = $_GET['id'];
	$delete = mysql_query("DELETE FROM dangkitin WHERE id='$id'");
		if($delete){
			@header('location:view-dangkitin.php');
			}else{
			echo "Xóa bài thất bại";
			}



?>
