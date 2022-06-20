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
<a href="dangky.php"><button>Đăng Ky</button></a>
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
<div class="ct">
<a class="a" href="chitiet.html"><img src="Picture/images3.jpg" width="600px" height="550px" /></a><br />
<div align="center">
  <br>
<H2>Món Ăn thứ nhất</H2>
<br>
<div align="center">
<input class="button" type="button" onclick="myClick()" value="Mua hàng" />
</div>
</div>
<div>
  <h4>Thành phần :</h4>
  <p>-Nguyên liệu 1</p>
  <p>-Nguyên liệu 2</p>
  <p>-Nguyên liệu 3</p>
  <p>-Nguyên liệu 4</p>
  <p>-Nguyên liệu 5</p>
  <h4>Giới thiệu :</h4>
  <p>Là loại bánh có lịch sử lâu đời nhất trong ẩm thực truyền thống Việt Nam còn được sử sách nhắc lại bánh chưng có vị trí đặc biệt trong tâm thức của cộng đồng người Việt. Sự ra đời và tục lệ làm bánh chưng ngày Tết, ngày giỗ Tổ muốn nhắc nhở con cháu về truyền thống của dân tộc đồng thời nhấn mạnh tầm quan trọng của cây lúa và thiên nhiên trong nền văn hoá lúa nước. Theo thời gian, nền văn minh công nghiệp đang dần được hình thành song ý nghĩa và vai trò của bánh chưng thì vẫn còn nguyên vẹn.</p>

</div>
</article>

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
<div class="menu2" align="center">
<h3>HỖ TRỢ TRỤC TUYẾN</h3>
<img src="Picture/icon2.png" />
<p>Nhân viên tư vấn 1</p>
<a href="#"><img src="Picture/Anh1.jpg" width="110px" height="150px" /></a>
<p> Điện Thoại : 0123456789</p>
<hr />
<p>Nhân viên tư vấn 2</p>
<a href="#"><img src="Picture/Anh2.jpg" width="110px" height="150px" /></a>
<p> Điện Thoại : 0123456789</p>
</div>
<div class="menu2" align="center">
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
