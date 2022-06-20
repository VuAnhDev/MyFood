<?php
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Myfood</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function myClick(){
	var x = confirm("Xác nhận mua mặt hàng này");
	if(x){
	alert("Cảm ơn bạn mua món ăn của chúng tôi");
}else{
 alert("Mời bạn quay lại tham khảo món ăn khác");	
}
}
</script>
</head>
<body>
<div id="menu">
<header>
<img src="Picture/home.jpg" width="972px" height="250px"/>
<div class="menu">
  <a href="dangnhap.php"><button>Đăng Nhập</button></a>
</div>
</header>
<br />
<nav>
<ul class="bang">
<li><a href="index.php"> TRANG CHỦ</a></li>
<li><a href="gioithieu.php">GIỚI THIỆU</a></li>
<li><a href="#">MÓN NGON MỖI NGÀY</a>
	<ul>
	<li><a href="danhsach.php">GỌI MÓN</a></li>
            <li><a href="danhsach.php">ĂN NHANH </a></li>
            <li><a href="danhsach.php">ĐIỂM TÂM</a></li>
            <li><a href="danhsach.php">MÓN CHÍNH</a></li>
    </ul>
    </li>
<li><a href="huongdan.php">HƯỚNG DẪN MUA HÀNG</a></li>
<li><a href="lienhe.php">LIÊN HỆ</a></li>
</ul>
</nav>
<div class="dk" align="center">
<h2>Đăng ký tài khoản</h2>
  <p>
    <?php
      if( isset($_SESSION["thongbao"])){
        echo $_SESSION["thongbao"];
        unset($_SESSION['thongbao']);
      }
    ?>
  </p>
  <img src="Picture/anh1.jpg" width="300px" height="300px" align="center">
  <form action="dangky_submit.php" method="POST"><table>
    <tr>
      <td>Tên đăng nhập :</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td>Mật khẩu:</td>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
      <td>Nhập lại mật khẩu</td>
      <td><input type="password" name="repassword"></td>
    </tr>
    <tr>
      <td colspan="2">
        <button type="submit" name="submit">Đăng ký</button>
        <button type="reset">làm mới</button>
      </td>
    </tr>
  </table>
  </form>
</div>
<footer align="center">
<br />

<marquee class="chuchay1">Hài lòng của quý khách là hân hạnh của chúng tôi</marquee>
<br>
<br>
<br>
<div class="ketthuc" ><a href="index.html">Đồ ăn ngon MyFood</a></div>
<br />
<b>Địa chỉ: Thịnh Đán, Thái Nguyên</b>
<br />
<br />
<p>Hotline của shop:0123456789</p>
</footer>
</div>
</body>
</html>
