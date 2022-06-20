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
<a href="dangky.php"><button>Đăng Kí</button></a>
<a href="dangnhap.php"><button>Đăng Nhập</button></a>
</div>
</header>
<br />
<nav>
<ul class="bang">
<li><a href="index.php"> TRANG CHỦ</a></li>
<li><a href="gioithieu.php">GIỚI THIỆU</a></li>
<li><a href="danhsach.php">MÓN NGON MỖI NGÀY</a>
  <ul>
  <li><a href="#">GỌI MÓN</a></li>
            <li><a href="danhsach.php">ĂN NHANH </a></li>
            <li><a href="danhsach.php">ĐIỂM TÂM</a></li>
            <li><a href="danhsach.php">MÓN CHÍNH</a></li>
    </ul>
    </li>
<li><a href="huongdan.php">HƯỚNG DẪN MUA HÀNG</a></li>
<li><a href="lienhe.php">LIÊN HỆ</a></li>
</ul>
</nav>

<article>
<br />
<div class="slide">
      <script type="text/javascript">
            if(document.images){
               var image1 = new Image();
               image1.src = "Picture/banner1.jpg";
               var image2 = new Image(); 
               image2.src = "Picture/banner4.jpg";
            }
      </script>
      <a href="#" onMouseOver="document.myImage.src=image2.src;" onMouseOut="document.myImage.src=image1.src;">
      <img name="myImage" src="Picture/banner1.jpg" width="700px" height="357px" />
      </a>
</div>
<br />
<div class="hd">
  <h4 >Bước 1: Đăng nhập vào hệ thống</h4>
<p>- Nhấn vào nút đăng nhập góc phải màn hình</p>
<p>- Nhập thông tin đăng nhập và click đăng nhập</p>
<p>Lưu ý: Bạn có thể tạo tài khoản nếu chưa có</p>
<h4>Bước 2: Chọn món ăn</h4>
<p>Bạn chọn món ăn mà mình yêu thích, chọn số lượng và bấm Thêm vào giỏ hàng. Sau khi chọn đủ các món cần mua, bạn bấm vào biểu tượng giỏ hàng ở góc dưới bên phải. Kiểm tra lại các sản phẩm có trong giỏ hàng trước khi thanh toán.</p>
<h4>Bước 3: Đặt hàng</h4>
<P>Cuối cùng bạn bấm vào ô Đặt Hàng và chờ shiper mang đồ ăn tới thôi!</P>
</div>

</article>
<div class="hd">

<aside>

<div class="menu1">
<h3>DANH MỤC SẢN PHẨM</h3>
<img src="Picture/icon2.png" />
<div align="justify">
<ul style="list-style-image:url(Picture/1.png)">
<li><a href="#">Đồ ăn nhanh</a></li>
<li><a href="#">Đồ ăn sáng</a></li>
<li><a href="#">Đồ ăn trưa</a></li>
<li><a href="#">Đồ ăn tối</a></li>
<li><a href="#">Đồ ăn vặt</a></li>
</ul>
</div>
</div>
<div class="menu1">
<h3>ĐẶC SẢN</h3>
<img src="Picture/icon2.png" />
<div align="justify">
<ul style="list-style-image:url(Picture/1.png)">
<li><a href="#">Cơm lam</a></li>
<li><a href="#">Tương nếp</a></li>
<li><a href="#">Đậu phụ</a></li>
<li><a href="#">Nem chua</a></li>
<li><a href="#">Trám đen</a></li>
</ul>
</div>
</div>
<br />
<h3>ĐỊA CHỈ NHÀ HÀNG</h3>
<img src="Picture/icon2.png" />
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7419.79589929492!2d105.80489657724605!3d21.589906191160896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x515f4860ede9e108!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAmIFRydXnhu4FuIHRow7RuZyBUaMOhaSBOZ3V5w6pu!5e0!3m2!1svi!2s!4v1617806685858!5m2!1svi!2s" width="260" height="260" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<br /><br /><br />
<img src="Picture/banner3.jpg" width="260px" />
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
