<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dư-Đạt-Chiến</title>
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

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php
require('config/header.php');

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
    <!-- Service Start -->
    <div class="container-fluid service py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Các dịch vụ của chúng tôi</small>
                <h1 class="display-5 mb-5">Chúng tôi có những gì?</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-cheese fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Dịch vụ cung cấp đồ ăn vặt </h4>
                                <p class="mb-4">Cung cấp hàng loạt các món ăn vặt hot trend mang lại những cảm xúc tuôn trào và hương vị không thể cưỡng lại</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-wine-glass-alt fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Đồ uống đi kèm</h4>
                                <p class="mb-4">Chúng tôi có các sản phẩm nước uống phù hợp với các món ăn vặt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-walking fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Dịch vụ giao hàng</h4>
                                <p class="mb-4">Chung tôi có dịch vụ giao hàng hỏa tốc,sẽ mang sản phẩm tới cho khách hàng trong thời gian sớm nhất.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-headset fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Dịch vụ chăm sóc khách hàng</h4>
                                <p class="mb-4">Chung tôi có đội ngũ chăm sóc khách hàng gìau kinh nghiệm sẽ giải đáp mọi thắc măc của bạn.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- service end -->
                <!-- Menu Start -->
                <div class="container-fluid menu bg-light py-6 my-6">
                    <div class="container">
                        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Sản phẩm của chúng tôi</small>
                            <h1 class="display-5 mb-5">Những đồ ăn vặt và thức uống phổ biến nhất</h1>
                        </div>
                        <div class="tab-class text-center">
                            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                                <li class="nav-item p-2">
                                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill active" data-bs-toggle="pill" href="#tab-6">
                                        <span class="text-dark" style="width: 150px;">Đồ ăn</span>
                                    </a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-7">
                                        <span class="text-dark" style="width: 150px;">Đồ uống</span>
                                    </a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div id="tab-6" class="tab-pane fade show p-0 active">
                                    <div class="row g-4">
                                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/bim bim cánh gà.jpg" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Bim bim cánh gà</h4>
                                                        <h4 class="text-primary">45000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.2s">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/bim bim doraemon.jpeg" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Bim bim Doraemon</h4>
                                                        <h4 class="text-primary">65000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.3s">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/bim bim tăm que đậu hà lan.webp" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Tăm que đậu Hà Lan</h4>
                                                        <h4 class="text-primary">50000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.4s">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/chân gà xả tắc.jpg" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Chân gà xả tăc</h4>
                                                        <h4 class="text-primary">75000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.5s">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/da heo cháy tỏi.webp" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Da hep cháy tỏi</h4>
                                                        <h4 class="text-primary">125000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.6s">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/khô gà lá chanh.webp" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Khô gà lá chanh</h4>
                                                        <h4 class="text-primary">225000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.7s">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/pizza ốc quế.jpg" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>pizza ốc quế</h4>
                                                        <h4 class="text-primary">25000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.8s">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/snakc vị cua.webp" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Snack cua</h4>
                                                        <h4 class="text-primary">25000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-7" class="tab-pane fade show p-0">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/7up.jpg" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>7 Up</h4>
                                                        <h4 class="text-primary">15000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/nutriboost.webp" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Nitriboost</h4>
                                                        <h4 class="text-primary">20000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/nước dừa.jpg" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Nước dừa</h4>
                                                        <h4 class="text-primary">25000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/nước đào jico.jpg" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Nước đào Jico</h4>
                                                        <h4 class="text-primary">10000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/nước ép táo.webp" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Nước ép táo</h4>
                                                        <h4 class="text-primary">50000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/pepsi.webp" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Pepsi</h4>
                                                        <h4 class="text-primary">15000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/trà sữa.jpg" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Trà sữa</h4>
                                                        <h4 class="text-primary">35000đ</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="menu-item d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded-circle" src="img/nước cam mirinda.jpg" alt="">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                        <h4>Nước cam Mirinda</h4>
                                                        <h4 class="text-primary">20000</h4>
                                                    </div>
                                                    <p class="mb-0">Sản phẩm bán chạy của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



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
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 phố cổ, Hà Nội, Việt Nam</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+84 65894156</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>username@gmail.com</p>
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

        <!-- Footer End -->
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