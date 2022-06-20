<?php
	session_start();
	include 'config.php';
	if( isset($_POST['submit']) && ($_POST['username']) != '' &&($_POST['password']) != '')
		{
			$username = $_POST["username"];
			$password = $_POST["password"];
			$sql = "SELECT * FROM user Where username = '$username' AND password = '$password'";
			$user = mysqli_query($conn,$sql);
			if(mysqli_num_rows($user)>0){
				$_SESSION["user"] = $username;
				header("location:test.php");
			}
			else{
				$_SESSION["thongbao"] = "Sai tên đăng nhập hoặc mật khẩu";
				header("location:dangnhap.php");
				
			}
		}
	else {
			$_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin!";
			header("location:dangnhap.php");
			
	}
?>