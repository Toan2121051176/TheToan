<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thế Toàn</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt="tìm kiếm"></a>
            <a href="HTML/Login.html"><i class="fa-regular fa-user" style="color: black;"></i></a>
            <a href="shopping-cart.html"><i class="fa-solid fa-cart-shopping" style="color: black;"> <span class="headerCartListCount">0</span></i></a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">

                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <div class="logo">
                            <a href="index.html" style="color: red;">
                                <i class="fas fa-t"></i><span style="font-family: 'Pacifico', cursive;">-Fashion</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.html">Trang Chủ</a></li>
                            <li><a href="./shop.html">Sản Phẩm</a></li>
                            <li><a href="about.html">Giới Thiệu</a>
                            </li>
                            <li><a href="./contact.html">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt="tìm kiếm"></a>
                        <a href="HTML/Login.html"><i class="fa-regular fa-user" style="color: black;"></i></a>
                        <a href="shopping-cart.html"><i class="fa-solid fa-cart-shopping" style="color: black;"> <p class="headerCartListCount" style="padding: 0;width: 1.3em;left:1.2em;">0</p></i></a>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
    "></script>

    <!-- Our files -->
    <link rel="stylesheet" href="../css/admin.css">

    </head>

    <body>
        <header>
            <h1>
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <div class="logo">
                            <a href="index.html" style="color: red;">
                                <i class="fas fa-t"></i><span style="font-family: 'Pacifico', cursive;">T-Toàn</span>
                            </a>

                        </div>
                    </div>
                </div>
            </h1>
        </header>

        <!-- Menu -->
        <aside class="sidebar">
            <ul class="nav">
                <li class="nav-title">MENU</li>
                <li class="nav-item"><a class="nav-link active"><i class="fa fa-home"></i> Trang Chủ</a></li>
                <li class="nav-item"><a class="nav-link"><i class="fa fa-th-large"></i> Sản Phẩm</a></li>
                <li class="nav-item"><a class="nav-link"><i class="fa fa-file-text-o"></i> Đơn Hàng</a></li>
                <li class="nav-item"><a class="nav-link"><i class="fa fa-address-book-o"></i> Khách Hàng</a></li>
                <li class="nav-item">
                    <hr>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link" onclick="logOutAdmin(); return true;">
                        <i class="fa fa-arrow-left"></i> Đăng xuất (về Trang chủ)
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Khung hiển thị chính -->
        <div class="main">
            <div class="home">
                <div class="canvasContainer">
                    <canvas id="myChart1"></canvas>
                </div>

                <h1 style="text-align: center;"> Chúc Bạn Một Ngày Tốt Lành!!!!</h1>
                <div class="canvasContainer">
                    <canvas id="myChart2"></canvas>
                </div>

                <div class="canvasContainer">
                    <canvas id="myChart3"></canvas>
                </div>

                <div class="canvasContainer">
                    <canvas id="myChart4"></canvas>
                </div>
            </div>

            <!-- Sản Phẩm -->
            <div class="sanpham">
                <table class="table-header">
                    <tr>
                        <!-- Theo độ rộng của table content -->
                        <th title="Sắp xếp" style="width: 5%">STT </th>
                        <th title="Sắp xếp" style="width: 10%">Mã Sản Phẩm </th>
                        <th title="Sắp xếp" style="width: 40%">Tên sản Phẩm </th>
                        <th title="Sắp xếp" style="width: 15%">Mô tả</th>
                        <th title="Sắp xếp" style="width: 15%">số lượng</th>
                        <th style="width: 15%">Giá</th>
                    </tr>
                </table>
                <div class="table-content">
                </div>

                <div class="table-footer">
                    <select name="kieuTimSanPham">
                    <option value="ma">Tìm theo mã</option>
                    <option value="ten">Tìm theo tên</option>
                </select>
                    <input type="text" placeholder="Tìm kiếm...">
                    <button onclick="document.getElementById('khungThemSanPham').style.transform = 'scale(1)';">
                    <i class="fa fa-plus-square"></i>
                    Thêm sản phẩm
                </button>
                </div>
                <div id="khungThemSanPham" class="overlay">
                    <span class="close" onclick="this.parentElement.style.transform = 'scale(0)';">&times;</span>
                    <table class="overlayTable table-outline table-content table-header">
                        <tr>
                            <th colspan="2">Thêm Sản Phẩm</th>
                        </tr>
                        <tr>
                            <td>Mã sản phẩm:</td>
                            <td><input type="text" name="masp" id="maspThem" required></td>
                        </tr>
                        <tr>
                            <td>Tên sản phẩm:</td>
                            <td><input type="text" name="tensp" required></td>
                        </tr>
                        <tr>
                            <td>Ảnh sản phẩm</td>
                            <td><input type="file" name="anhsp" required></td>
                        </tr>
                        <tr>
                            <td>Mô tả sản phẩm:</td>
                            <td><textarea style="height: 5em;" name="motasp" required></textarea></td>
                        </tr>
                        <tr>
                            <td>Số lượng:</td>
                            <td><input type="text" name="soluongsp" required></td>
                        </tr>
                        <tr>
                            <td>Giá:</td>
                            <td><input type="text" name="giasp" required></td>
                        </tr>
                        <tr>
                            <td>Loại hàng hóa</td>
                            <td>
                                <select name="chonCompany">
                                <option value="Apple">Đồ Ăn</option>
                                <option value="Samsung">Đồ Uống</option>
                                <option value="Oppo">Đồ Tráng Miệng</option>
                                <!-- Các option khác -->
                            </select>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="table-footer"> <input type="submit" style="width: 10em;height: 3em;background-color:  #F28123;color: white;" value="Thêm sản phẩm"> </td>
                        </tr>
                    </table>
                </div>
                <div id="khungSuaSanPham" class="overlay"></div>
            </div>

            <!-- // sanpham -->


            <!-- Đơn Hàng -->
            <div class="donhang">
                <table class="table-header">
                    <tr>
                        <!-- Theo độ rộng của table content -->
                        <th title="Sắp xếp" style="width: 5%">Stt </th>
                        <th title="Sắp xếp" style="width: 13%">Mã đơn </th>
                        <th title="Sắp xếp" style="width: 7%">Khách </th>
                        <th title="Sắp xếp" style="width: 20%">Sản phẩm </th>
                        <th title="Sắp xếp" style="width: 15%">Tổng tiền </th>
                        <th title="Sắp xếp" style="width: 10%">Ngày giờ </th>
                        <th title="Sắp xếp" style="width: 10%">Trạng thái </th>
                    </tr>
                </table>

                <div class="table-content">
                </div>

                <div class="table-footer">
                    <div class="timTheoNgay">
                        Từ ngày: <input type="date"> Đến ngày: <input type="date">

                        <button><i class="fa fa-search"></i> Tìm</button>
                    </div>

                    <select name="kieuTimDonHang">
                    <option value="ma">Tìm theo mã đơn</option>
                    <option value="khachhang">Tìm theo tên khách hàng</option>
                    <option value="trangThai">Tìm theo trạng thái</option>
                </select>
                    <input type="text" placeholder="Tìm kiếm...">
                </div>
            </div>

            <!-- // don hang -->


            <!-- Khách hàng -->
            <div class="khachhang">
                <table class="table-header">
                    <tr>
                        <!-- Theo độ rộng của table content -->
                        <th title="Sắp xếp" style="width: 5%">Stt </th>
                        <th title="Sắp xếp" style="width: 15%">Tên đăng nhập </th>
                        <th title="Sắp xếp" style="width: 20%">Số điện thoại </th>
                        <th title="Sắp xếp" style="width: 20%">mật khẩu </th>
                        <th style="width: 10%">Hành động</th>
                    </tr>
                </table>

                <div class="table-content">
                </div>

                <div class="table-footer">
                    <select name="kieuTimKhachHang">
                    <option value="ten">Tìm theo họ tên</option>
                    <option value="email">Tìm theo email</option>
                    <option value="taikhoan">Tìm theo tài khoản</option>
                </select>
                    <input type="text" placeholder="Tìm kiếm...">
                    <button onclick="document.getElementById('khungThemKhachHang').style.display = 'block'">
                    <i class="fa fa-plus-square"></i>
                    Thêm Người Dùng
                </button>
                </div>
            </div>

            <div id="khungThemKhachHang" style="display: none;" class="adduser">
                <table class="overlayTable table-outline table-content table-header">
                    <tr>
                        <th colspan="2">Thêm Người Dùng</th>
                    </tr>
                    <tr>
                        <td>UID:</td>
                        <td><input type="text" id="UID" required></td>
                    </tr>
                    <tr>
                        <td>Tên Đăng Nhập:</td>
                        <td><input type="text" required></td>
                    </tr>
                    <tr>
                        <td>Mật Khẩu:</td>
                        <td><input type="text" style="height: 5em;" required></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" required></td>
                    </tr>
                    <tr>
                        <td>Số Điện Thoại:</td>
                        <td><input type="text" required></td>
                    </tr>


                    <tr>
                        <td colspan="2" class="table-footer"><button style="width: 5em;border-radius:0.3em; height: 3em;background-color:  #F28123;color: white;" onclick="document.getElementById('khungThemKhachHang').style.display='none'">Hủy</button> <input type="submit" style="width: 10em;height: 3em;background-color:  #F28123;color: white;"
                                value="Thêm Người Dùng"> </td>
                    </tr>
                </table>
            </div>


            <footer>

            </footer>
    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('.main > div');

            // Hàm ẩn tất cả các phần tử
            function hideAllSections() {
                sections.forEach(section => {
                    section.style.display = 'none';
                });
            }

            // Hàm xử lý khi nhấn vào các mục menu
            navLinks.forEach((link, index) => {
                link.addEventListener('click', function() {
                    // Ẩn tất cả các phần tử
                    hideAllSections();

                    // Xóa lớp 'active' khỏi tất cả các mục menu
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                    });

                    // Thêm lớp 'active' cho mục được nhấn
                    this.classList.add('active');

                    // Hiển thị phần tử tương ứng với mục menu được nhấn
                    sections[index].style.display = 'block';
                });
            });

            // Hiển thị trang chủ mặc định khi tải trang
            sections[0].style.display = 'block';
            navLinks[0].classList.add('active');
        });
    </script>
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="header__logo">
                            <div class="logo">
                                <a href="index.html" style="color: red;">
                                    <i class="fas fa-t"></i><span style="font-family: 'Pacifico', cursive;">-Fashion</span>
                                </a>

                            </div>
                        </div>
                        <p>Khách hàng là trung tâm của mô hình kinh doanh độc đáo của chúng tôi, bao gồm cả thiết kế.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Cửa hàng quần áo</a></li>
                            <li><a href="#">Giày Xu Hướng</a></li>
                            <li><a href="#">Phụ Kiện </a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Phương thức thanh toán</a></li>
                            <li><a href="#">Vận chuyển</a></li>
                            <li><a href="#">Hoàn Trả</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Hãy là người đầu tiên biết về hàng mới, sách tra cứu, khuyến mại và khuyến mãi!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>