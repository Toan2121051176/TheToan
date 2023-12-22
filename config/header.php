
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid nav-bar">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-4">
                <a href="index.php" class="navbar-brand">
                    <h1 class="text-primary fw-bold mb-0">Cửa hàng<span class="text-dark">Chu Thế Toàn</span> </h1>
                </a>

                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                        <a href="about.php" class="nav-item nav-link">Giới thiệu</a>
                        <a href="menu.php" class="nav-item nav-link">Sản Phẩm</a>

                        <a href="contact.php" class="nav-item nav-link">Liên hệ</a>
                    </div>
                    <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                    <?php
                    if(isset($_SESSION['username'])){
                        echo' <a href="user.php" class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex"><i class="fas fa-user"></i></a>';
                    }
                    else{
                        echo' <a href="user/login.php" class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex"><i class="fas fa-user"></i></a>';
                    }
                   ?>
                   
                   <a href="cart.php" class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" style="position: relative;">
    <i class="fas fa-shopping-cart" style="position: relative; z-index: 1;"></i>
    <?php
    if (isset($_SESSION['username'])) {
        $cartItemCount = isset($_SESSION['user_cart'][$_SESSION['username']]) ? count($_SESSION['user_cart'][$_SESSION['username']]) : 0;
        echo '<span style="background-color: red; border-radius: 50%; width: 2em; height: 2em; line-height: 2em; text-align: center; position: absolute; top: -1em; right: -10px; z-index: 2;color:#fff;">' . $cartItemCount . '</span>';
    } else {
        $cartItemCount = isset($_SESSION['guest_cart']) ? count($_SESSION['guest_cart']) : 0;
        echo '<span style="background-color: red; border-radius: 50%; width: 2em; height: 2em; line-height: 2em; text-align: center; position: absolute; top: -1em; right: -10px; z-index: 2;color:#fff;">' . $cartItemCount . '</span>';
    }
    ?>
</a>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex" style="margin-bottom: 40%;">
                        <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 col-md-12">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Chào mừng đến với</small>
                    <h1 class="display-1 mb-4 animated bounceInDown">Cửa <span class="text-primary">Hàng</span>Đồ Ăn Vặt</h1>
                    <a href="menu.php" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Mua Ngay</a>
                    <a href="about.php" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Thông tin chi tiết</a>
                </div>
                <div class="col-lg-5 col-md-12">
                    <img src="img/Thiết kế chưa có tên.png" class="img-fluid1 rounded animated zoomIn" alt="ảnh nền">
                </div>
            </div>
        </div>
    </div>