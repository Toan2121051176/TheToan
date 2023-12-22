<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chu Thế Toàn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<?php
        require('config/header1.php');
        echo"<script>
        $(document).ready(function(){
            $('#about').addClass('active');
        });
        </script>";
        ?>

    <!-- About Satrt -->
    <div class="container-fluid py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <img src="img/aboutabc.jpg" class="img-fluid1 rounded" alt="">
                </div>
                <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Về chúng tôi</small>
                    <h1 class="display-5 mb-4">Được tin cậy bởi hàng ngàn khách hàng</h1>
                    <p class="mb-4">Chào mừng đến với cửa hàng đồ ăn vặt, nơi mang đến cho bạn những trải nghiệm thú vị qua những món ngon độc đáo. Từ những viên snack bổ sung năng lượng đến những loại đồ ăn đặc sản, chúng tôi tự hào giới thiệu bộ sưu tập đa dạng, mang
                        đậm hương vị và sự phong phú của ẩm thực đường phố. Hãy khám phá và thỏa mãn vị giác của bạn cùng chúng tôi!</p>
                    <div class="row g-4 text-dark mb-5">
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Giao đồ ăn tươi và nhanh
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Hỗ trợ 24/7
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Đa dạng sự lựa chọn
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Ưu đãi hấp dẫn cho bữa ăn ngon
                        </div>
                    </div>
                    <a href="about.html" class="btn btn-primary py-3 px-5 rounded-pill">Xem chi tiết<i class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Footer Start -->
    <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
        <div class="container py-5" style="height:10em;">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 style="margin-left: 6em;" class="section-title ff-secondary text-start text-primary fw-normal mb-4">Cửa hàng</h4>
                    <a class="btn btn-link" href="about.html">Thông tin về chúng tôi</a>
                    <a class="btn btn-link" href="contact.html">Liên hệ</a>
                    <a class="btn btn-link" href="menu.html">Xem menu</a>
                    <a class="btn btn-link" href="privacy-policy.html">Chính sách bảo mật</a>
                    <a class="btn btn-link" href="terms-conditions.html">Điều khoản & Điều kiện</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Liên Hệ</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ba Vì, Hà Nội, Việt Nam</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0983080347</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>toansd9a@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="HTML/admin.html"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Gửi phản hồi tới chúng tôi</h4>
                    <p>Hãy gửi chúng tôi lời phản hồi của bạn</p>
                    <form action="">
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Phản hồi của bạn">
                            <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>