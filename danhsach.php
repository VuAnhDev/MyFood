
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
<a class="dangky" href="dangky.php"><button>Đăng Kí</button></a>
<a class="dangnhap" href="dangnhap.php"><button>Đăng Nhập</button></a>
</div>
</header>
<br />
<nav>
<ul class="bang">
<li><a href="index.php"> TRANG CHỦ</a></li>
<li><a href="gioithieu.php">GIỚI THIỆU</a></li>
<li><a href="#">MÓN NGON MỖI NGÀY</a>
	<ul>
	<li><a href="#">GỌI MÓN</a></li>
            <li><a href="#">ĂN NHANH </a></li>
            <li><a href="#">ĐIỂM TÂM</a></li>
            <li><a href="#">MÓN CHÍNH</a></li>
    </ul>
    </li>
<li><a href="huongdan.php">HƯỚNG DẪN MUA HÀNG</a></li>
<li><a href="lienhe.php">LIÊN HỆ</a></li>
</ul>
</nav>

<article>
<br />
<h2>Món khai vị</h2>
<div class="box">
<a class="a" href="chitiet.php"><img src="Picture/images7.jpg" width="225px" height="200px" /></a><br />
<div align="center">
<a href="#">Món ăn 8</a>
</div>
<h4>5.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>
<div class="box">
<a class="a" href="chitiet2.php"><img src="Picture/images8.jpg" width="225px" height="200px" /></a><br />
<div align="center">
<a href="#">Món ăn 9 </a>
</div>
<h4>90.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>
<div class="box">
<a class="a" href="chitiet3.php"><img src="Picture/images9.jpg" width="225px" height="200px"/></a><br />
<div align="center">
<a href="#">Món ăn 10</a>
</div>
<h4>50.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>
<br />
<h2>Món giảm giá</h2>
<br />
<br />
<div class="box">
<a class="a" href="chitiet.php"><img src="Picture/images1.jpg" width="225px" height="200px" /></a><br />
<div align="center">
<a href="#">Món ăn 1</a>
</div>
<p><del>120.000 VNĐ</del></p>
<h4>100.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>
<div class="box">
<a class="a" href="#"><img src="Picture/images2.jpg" width="225px" height="200px" /></a><br />
<div align="center">
<a href="#">Món ăn 2</a>
</div>
<p><del>80.000 VNĐ</del></p>
<h4>50.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>
<div class="box">
<a class="a" href="#"><img src="Picture/images3.jpg" width="225px" height="200px"/></a><br />
<div align="center">
<a href="#">Món ăn 3</a>
</div>
<p><del>90.000 VNĐ</del></p>
<h4>50.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>

<h2>Món chính</h2>
<br />
<br />
<div class="box">
<a class="a" href="#"><img src="Picture/images4.jpg" width="225px" height="200px" /></a><br />
<div align="center">
<a href="#">Món ăn 5</a>
</div>
<h4>60.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" /></div>
</div>
<div class="box">
<a class="a" href="#"><img src="Picture/images5.jpg" width="225px" height="200px" /></a><br />
<div align="center">
<a href="#">Món ăn 6</a>
</div>
<h4>90.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>
<div class="box">
<a class="a" href="#"><img src="Picture/images6.jpg" width="225px" height="200px"/></a><br />
<div align="center">
<a href="#">Món ăn 7</a>
</div>
<h4>85.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>
<h2>Món tráng miệng</h2>
<br />
<br />
<div class="box">
<a class="a" href="#"><img src="Picture/images7.jpg" width="225px" height="200px" /></a><br />
<div align="center">
<a href="#">Món ăn 8</a>
</div>
<h4>5.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>
<div class="box">
<a class="a" href="#"><img src="Picture/images8.jpg" width="225px" height="200px" /></a><br />
<div align="center">
<a href="#">Món ăn 9 </a>
</div>
<h4>90.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>
<div class="box">
<a class="a" href="#"><img src="Picture/images9.jpg" width="225px" height="200px"/></a><br />
<div align="center">
<a href="#">Món ăn 10</a>
</div>
<h4>50.000 VNĐ</h4>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>

</article>
<aside>

<img src="Picture/anh3.jpeg"width="260px" height="1300px">
</div>
</aside>
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
