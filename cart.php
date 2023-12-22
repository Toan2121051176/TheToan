<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Bạn chưa đăng nhập')</script>";
    echo "<script>window.location.href='user/login.php';</script>";
    exit();
}
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
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php
include('config/header1.php');
?>
    <!-- Hero End -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove"></th>
                                    <th class="product-image">Ảnh Sản Phẩm</th>
                                    <th class="product-name">Tên Sản Phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-total">Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                                if (isset($_SESSION['user_cart'][$_SESSION['username']])) {
                                    foreach ($_SESSION['user_cart'][$_SESSION['username']] as $key => $prd) {
                                        $name = $prd['name'];
                                        require('config/connect.php');
                                        $sql = "SELECT * FROM products WHERE prd_name = '$name'";
                                        $kq=$conn->query($sql);
                                        $row = $kq->fetch_assoc();
                                        echo '<tr class="table-body-row">';
                                        echo '<td class="product-rm"><a href="config/remove_product.php?key=' . $key . '"><i class="far fa-window-close"></i></a></td>';
                                        echo '<td class="product-image"><img src="' . $prd['image'] . '" alt="' . $prd['name'] . '"></td>';
                                        echo '<td class="product-name">' . $prd['name'] . '</td>';
                                        echo '<td class="product-price">' . $prd['price'] . '</td>';
                                        echo '<td class="product-quantity">
                                        <input type="number" placeholder="0" value="' . $prd["quantity"] . '" data-key="' . $key . '" data-product="' . $prd["name"] . '" max="' . $row['prd_quantity'] . '" min="0" class="quantity-input">
                                        </td>';
                                
                                        $total_price =(float) $prd['quantity'] * (float)$prd['price'];
                                        $formatted_total_price = number_format($total_price, 2, '.', ',');
                                        echo '<td class="product-total">' . $formatted_total_price . '</td>';
                                        
                                        echo '</tr>';
                                        $conn->close();
                                    }
                                }
                                    ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="total-section">
                                    <table class="total-table">
                                        <thead class="total-table-head">
                                            <tr class="table-total-row">
                                                <th>Thành Phần</th>
                                                <th>Số lượng</th>
                                                <th>Giá</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $total_amount = 0;
                                                if (isset($_SESSION['user_cart'][$_SESSION['username']])) {
                                                    foreach ($_SESSION['user_cart'][$_SESSION['username']] as $key => $prd) {
                                                        $total_price = (float)$prd['quantity'] * (float)$prd['price'];
                                                        $total_amount += $total_price;
                                                        $formatted_total_price = number_format($total_price, 2, ".", ",");
                                                        echo '<tr class="total-data">
                                                                <td><strong>' . $prd['name'] . '</strong></td>
                                                                <td>' . $prd['quantity'] . '</td>
                                                                <td>' . $formatted_total_price . '</td>
                                                            </tr>';
                                                    }
                                                }

                                                // Thêm chi phí vận chuyển
                                                $shipping_cost = 25000;
                                                $total_amount += $shipping_cost;

                                                // Hiển thị dòng và giá trị của vận chuyển trong bảng
                                                echo '<tr class="total-data">
                                                        <td><strong>Vận chuyển </strong></td>
                                                        <td></td>
                                                        <td>' . number_format($shipping_cost, 2, ".", ",") . 'đ</td>
                                                    </tr>';

                                                // Hiển thị tổng số tiền
                                                echo '<tr class="total-data">
                                                        <td><strong>Tổng  </strong></td>
                                                        <td></td>
                                                        <td>' . number_format($total_amount, 2, ".", ",") . 'đ</td>
                                                    </tr>';
                                                ?>

                                        </tbody>
                                    </table>
                                    <div class="cart-buttons">
                                        <a href="cart.php" class="boxed-btn">Làm Mới</a>
                                        <a href="thanhtoan.php" class="boxed-btn black">Thanh Toán</a>
                                    </div>
                                </div>

                                <div class="coupon-section">
                                    <h3>Voucher</h3>
                                    <div class="coupon-form-wrap">
                                        <form action="">
                                            <p><input type="text" placeholder="Coupon"></p>
                                            <p><input type="submit" value="Xác Nhận"></p>
                                        </form>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php


if(isset($_POST['key']) && isset($_POST['quantity']) && isset($_POST['product'])) {
    $key = $_POST['key'];
    $quantity = $_POST['quantity'];
    $product = $_POST['product'];

    // Xử lý cập nhật số lượng trong giỏ hàng
    if (isset($_SESSION['user_cart'][$_SESSION['username']][$key]) && $_SESSION['user_cart'][$_SESSION['username']][$key]['name'] === $product) {
        $_SESSION['user_cart'][$_SESSION['username']][$key]['quantity'] = $quantity;
        echo 'Cập nhật số lượng thành công!';
    } 
    }
?> <!-- Footer Start -->
    <?php
    include('config/footer.php');
    ?>

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