<?php
session_start();
include 'config.php';
	if( isset($_POST['submit']) && ($_POST['username']) != '' &&($_POST['password']) != '' &&($_POST['repassword']) != '')
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		$level = 0;
		if($password != $repassword){
			$_SESSION["thongbao"] = "Mật khẩu nhập lại không chính xác";
			header("location:dangky.php");
			die();
		}
		$sql = "SELECT * FROM user where username = '$username' ";
		$old = mysqli_query($conn,$sql);
		if( mysqli_num_rows($old)>0){
			$_SESSION["thongbao"] = "Tài khoản đã tồn tại";
			header("location:dangky.php");
			die();
		}
		$sql = "INSERT INTO user (username,password,level) VALUES ('$username','$password','$level')";
		mysqli_query($conn,$sql);
		$_SESSION["thongbao"] = "Đã đăng ký thành công";
		header('location:dangnhap.php');
	}else{
		$_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin";
		header("location:dangky.php");
	}
?>
