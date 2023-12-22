<?php
session_start();

if(!isset($_SESSION['username'])==='admin' || $_SESSION['username'] !== 'admin') {
    echo "<script>window.location.href = 'login.php';</script>";
    exit();
}



?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <link rel="stylesheet"href="../css/admin.css">

</head>

<body>
    <header>
        <div class="header-container"> 
            <h1 class="restaurant-title">Chu Thế Toàn Store</h1>
        </div>
    </header>

    <!-- Menu -->
    <aside class="sidebar">
    <ul class="nav">
    <li class="nav-title">MENU</li>
    <li class="nav-item"><a href="admin.php?quanly=main" class="nav-link" id='tp1'><i class="fa fa-home"></i> Trang Chủ</a></li>
    <li class="nav-item"><a href="admin.php?quanly=product" class="nav-link" id='tp2'><i class="fa fa-th-large"></i> Sản Phẩm</a></li>
    <li class="nav-item"><a href="admin.php?quanly=donhang" class="nav-link" id='tp3'><i class="fa fa-file-text-o"></i> Đơn Hàng</a></li>
    <li class="nav-item"><a href="admin.php?quanly=user" class="nav-link" id='tp4'><i class="fa fa-address-book-o"></i> Khách Hàng</a></li>
    <li class="nav-item"><hr></li>
    <li class="nav-item">
        <a href="logout.php" class="nav-link">
            <i class="fa fa-arrow-left"></i> Đăng xuất (về Trang chủ)
        </a>
    </li>
</ul>
    </aside>
    <div class="main">
<?php
        if(isset($_GET['quanly'])){
            $temp=$_GET['quanly'];
            if($temp==="product"){
                echo"<script>
                $(document).ready(function(){
                    $('#tp2').addClass('active');
                });
                </script>";
                include('product.php');
            }
            else if($temp==="user"){
                echo"<script>
                $(document).ready(function(){
                    $('#tp4').addClass('active');
                });
                </script>";
                include('user.php');
            }
            else if($temp==="donhang") {
                echo"<script>
                $(document).ready(function(){
                    $('#tp3').addClass('active');
                });
                </script>";
                include('oders.php');
            }
               
            else{
                echo"<script>
                $(document).ready(function(){
                    $('#tp1').addClass('active');
                });
                </script>";
               echo'<div class="home">
               <div class="canvasContainer">
                   <canvas id="myChart1"></canvas>
               </div>
   
               <h1 style="text-align: center;"> Chúc Bạn Một Ngày Tốt Lành!!!! </h1>
               <div class="canvasContainer">
                   <canvas id="myChart2"></canvas>
               </div>
   
               <div class="canvasContainer">
                   <canvas id="myChart3"></canvas>
               </div>
   
               <div class="canvasContainer">
                   <canvas id="myChart4"></canvas>
               </div>
           </div>';
            }
        }
        else{
            echo"<script>
            $(document).ready(function(){
                $('#tp1').addClass('active');
            });
            </script>";
           echo'<div class="home">
           <div class="canvasContainer">
               <canvas id="myChart1"></canvas>
           </div>

           <h1 style="text-align: center;"> Chúc Bạn Một Ngày Tốt Lành!!!! </h1>
           <div class="canvasContainer">
               <canvas id="myChart2"></canvas>
           </div>

           <div class="canvasContainer">
               <canvas id="myChart3"></canvas>
           </div>

           <div class="canvasContainer">
               <canvas id="myChart4"></canvas>
           </div>
       </div>';
        }
?>
</div>
        <footer>

        </footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('.main > div');
        function hideAllSections() {
            sections.forEach(section => {
                section.style.display = 'none';
            });
        }
        navLinks.forEach((link, index) => {
            link.addEventListener('click', function() {
                hideAllSections();
                navLinks.forEach(link => {
                });
                sections[index].style.display = 'block';
            });
        });
        sections[0].style.display = 'block';

    });

</script>


</html>