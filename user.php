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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/user.css" rel="stylesheet">
</head>

<body>
    <?php
    include('config/header1.php')
    ?>
    <div class="container-x1">
        <div class="editer">
            <div class="dropdown">
                <button style="border: none;background-color: #fff;" onclick="toggleDropdown()">
                    <i class='far fa-edit' style='font-size:1em'></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="#" onclick="AddressForm()">Đổi mật khẩu</a>
                    <a href="#" onclick="ChangePasswordForm()">Cập nhật địa chỉ</a>
                </div>
            </div>
            <div class="billing-address-form">
                <form action="#" method="post">
                    <h1 style="font-family: Arial;font-weight: 100;">Cập nhật địa chỉ</h1>
                    <p><input type="text" placeholder="Họ và Tên" id="name" required></p>
                    <p><input type="text" placeholder="Địa Chỉ" id="address" required></p>
                    <p><input type="tel" placeholder="Số điện Thọai" id="phone" required></p>
                    <buton type="submit" style="font-family: 'Poppins', sans-serif;
                            display: inline-block;
                            background-color: #F28123;
                            color: #fff;
                            padding: 10px 20px;border-radius: 2em;">Xác Nhận</buton>
                </form>
            </div>
            <div class="change-password">
                <form action="info.php" method="post">
                    <h1 style="font-family: Arial;font-weight: 100;">Đổi mật khẩu</h1>
                    <p><input type="text" placeholder="Mật khẩu cũ" id="oldpassword" required></p>
                    <p><input type="text" placeholder="Mật khẩu mới" id="newpassword" required></p>
                    <buton type="submit" style="font-family: 'Poppins', sans-serif;
                            display: inline-block;
                            background-color: #F28123;
                            color: #fff;
                            padding: 10px 20px;border-radius: 2em;">Xác Nhận</buton>
                </form>
            </div>
        </div>
        <div class="info">
            <?php 
            
            if(isset($_SESSION['username']) ){
                require("config/connect.php");
                $username= $_SESSION['username'];   
                $sql = "SELECT username, numberphone,address FROM users WHERE username='$username'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo '<div class="customer-details">';
                    echo "<h2>Khách hàng:".$row['username']."</h2>";
                    echo "<p>Phone:".$row['numberphone']."</p>";
                    echo "<p>Address:".$row['address']."</p>";
                    echo '</div>';
                }
                elseif($username==='admin'){
                      echo '<div class="customer-details">';
                    echo "<h2>Bạn đang là :".$username."</h2>";
                }
                  
                }
            ?>
        <div class="thanh-phan">
            <div onclick="showSection('donmoi')">Chờ xác nhận</div>
            <div onclick="showSection('donduyet')">Chờ lấy hàng</div>
            <div onclick="showSection('don-ship')">Chờ giao hàng</div>
            <div onclick="showSection('don-thanh-cong')">Đơn hoàn thành</div>
        </div>
        <div class="order">
            <section class="donmoi">
                <h2>Chờ xác nhận</h2>
                <ul class="accept_order">
                    <li>
                        <div class="don-ok">
                            <img src="../image/tráng miệng/cam.jpg" alt="Tên sản phẩm">
                            <div class="order_details">
                                <div class="order_details">
                                    <h6 class="product">Tên sản phẩm</h6>
                                    <div class="details">
                                        <p class="price">Giá: 200000đ</p>
                                        <p class="quantity">x1</p>
                                        <p class="total">Thành tiền:200000đ</p>
                                    </div>
                                    <p class="time">Thời gian</p><button style="border: none;width: 3em;margin-left: 80%;"><a href="#">Hủy</a></button>
                                </div>
                            </div>
                        </div>

                    </li>
                </ul>
            </section>
            <section class="donduyet">
                <h2>Chờ lấy hàng</h2>
                <ul class="pending-orders">
                    <div class="form_order"></div>
                    <li>Order #2</li>
                </ul>
            </section>
            <section class="don-ship">
                <h2>Chờ giao hàng</h2>
                <ul class="shipping-orders">
                    <div class="form_order"></div>
                    <li>Order #4</li>
                </ul>
            </section>
            <section class="don-thanh-cong">
                <h2>Đơn hoàn thành</h2>
                <ul class="success-orders">
                    <div class="form_order"></div>
                    <li>Order #6</li>
                </ul>
            </section>
        </div>
    </div>
    </div>
    <?php
    include('config/footer.php');
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script>
        function AddressForm() {
            var billingAddressForm = document.querySelector('.billing-address-form');
            var changePasswordForm = document.querySelector('.change-password');
            billingAddressForm.style.display = 'block';
            changePasswordForm.style.display = 'none';
        }

        function ChangePasswordForm() {
            var billingAddressForm = document.querySelector('.billing-address-form');
            var changePasswordForm = document.querySelector('.change-password');
            billingAddressForm.style.display = 'none';
            changePasswordForm.style.display = 'block';
        }

        document.addEventListener('click', function(e) {
            var dropdown = document.querySelector('.dropdown-content');
            var billingAddressForm = document.querySelector('.billing-address-form');
            var changePasswordForm = document.querySelector('.change-password');

            if (!dropdown.contains(e.target) && e.target.getAttribute('id') !== 'name' && e.target.getAttribute('id') !== 'address' && e.target.getAttribute('id') !== 'phone' && e.target.getAttribute('id') !== 'oldpassword' && e.target.getAttribute('id') !== 'newpassword') {
                billingAddressForm.style.display = 'none';
                changePasswordForm.style.display = 'none';
            }
        });

        function toggleDropdown() {
            var dropdown = document.getElementById('myDropdown');
            dropdown.classList.toggle('show');
        }
    </script>
    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.order section');
            sections.forEach(section => {
                if (section.classList.contains(sectionId)) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
        }
    </script>
    <script>
        // JavaScript
        function toggleDropdown() {
            var dropdown = document.getElementById("myDropdown");
            dropdown.classList.toggle("show");
        }

        // Đóng danh sách khi bấm ra ngoài
        window.onclick = function(event) {
            if (!event.target.matches('.dropdown button')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

    <script src="js/main.js"></script>
</body>

</html>