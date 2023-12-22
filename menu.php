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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php
        require('config/header1.php');
        echo"<script>
        $(document).ready(function(){
            $('#product').addClass('active');
        });
        </script>";
        ?>
    <!-- Menu Start -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">Tất Cả</li>
                            <li data-filter=".food">Đồ Ăn</li>
                            <li data-filter=".drinking">Dồ Uống</li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-lists">
                <?php
                require('config/connect.php');
                mysqli_set_charset($conn, 'utf8');
                $sql = "SELECT * FROM products";
                $ketqua = $conn->query($sql);
                
                if ($ketqua->num_rows > 0) {
                    while($row=$ketqua->fetch_assoc()) {
                        echo '<div class="col-lg-4 col-md-6 text-center ';
            
                if ($row['prd_category'] === 'Đồ uống') {
                echo 'drinking';
            } elseif ($row['prd_category'] === 'Đồ ăn') {
                echo 'food';
            }
            echo '">';
            echo '<div class="single-product-item" style="background-color:#fffcf8">';
            echo '<span class="sale" id="saleSpan">NEW!</span>';
            echo '<script>
                setTimeout(function() {
                    document.getElementById("saleSpan").style.display = "none";
                }, 3000000); 
            </script>';
    
            echo '<div class="product-image">';
            $path = 'admin/image/';
            $img = $row['prd_img'];
            $link = $path . '/' . $img;
            echo '<a href="detail.php?prd_id=' . $row['prd_id'] . '"><img src="' . $link . '" alt="' . $row["prd_name"] . '"></a>';
            echo '</div>';
    
            echo '<h3>' . $row["prd_name"] . '</h3>';
            echo '<div style="text-align: center; margin-bottom: 10px;">';
            echo '<div class="product-price name-product" style="display: inline-block; margin-right: 10px; font-family: \'Poppins\', sans-serif;font-size: 30px;font-weight: 700;">' . $row["prd_price"] . 'đ</div>';
            echo '</div>';
                if($row["prd_quantity"]>0){
                    echo '<p>Còn lại: ' . $row["prd_quantity"] . '</p>';
                    echo '<form method="POST" action="menu.php">';
                    echo '<input type="hidden" name="product_id" value="' . $row['prd_id'] . '">';
                    echo '<button type="submit" name="add_to_cart" class="add-to-cart-btn" data-product-id="' . $row['prd_id'] . '" style="font-family: \'Poppins\', sans-serif;display: inline-block;background-color: #F28123;color: #fff;padding: 10px 20px;border: none;border-radius: 2em;">';
                    echo '<i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng';
                    echo '</button>';            
                    echo '</form>';
                }
                else{
                    echo '<p>HẾT HÀNG</p>';
                      echo '<form method="POST" >';
                    echo '<input type="hidden" name="product_id" value="' . $row['prd_id'] . '">';
                    echo '<button type="button"  data-product-id="' . $row['prd_id'] . '" style="font-family: \'Poppins\', sans-serif;display: inline-block;background-color: #F28123;color: #fff;padding: 10px 20px;border: none;border-radius: 2em;">';
                    echo '<i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng';
                    echo '</button>';            
                    echo '</form>';
                }
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "Không có sản phẩm nào.";
    }
$conn->close();    
    ?>
            </div>
        </div>
    </div>
    </div>
    <!-- Menu End -->
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
    <script src="js/main.js"></script>
    <script src="assets/js/jquery.isotope-3.0.6.min.js "></script>
    <script src="assets/js/main.js "></script>
</body>

</html>
<?php
        require('config/function.php');

        if (isset($_POST['product_id'])) {
            $prd_id = $_POST['product_id'];
            require('config/connect.php');
            mysqli_set_charset($conn, 'utf8');

            $sql = "SELECT prd_img, prd_name, prd_price FROM products WHERE prd_id='$prd_id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $prd_img = $row['prd_img'];
                    $prd_name = $row['prd_name'];
                    $prd_price = $row['prd_price'];
                    $max_quantity=$row['prd_quantity'];
                    $path = 'admin/image/';
                    $prd_img_path = $path . $row['prd_img'];

                    $product = array(
                        'name' => $prd_name,
                        'price' => $prd_price . 'đ', 
                        'quantity' => 0.5,
                        'image' => $prd_img_path,
                        'max_quantity'=>$max_quantity,
                    );
                    addProductToCart($product);
                   if( addProductToCart($product)===TRUE){
                    echo"<script> alert('Thêm sản phẩm vào giỏ hàng thành công!!')
                    window.location.href='menu.php'</script>";

                   }
                   else{
                    echo"<script> alert('Thêm sản phẩm vào giỏ hàng không thành công!!')
                    window.location.href='menu.php'</script>";
                   }

            }
            $conn->close();
           
        } 
    }
       
    ?>
