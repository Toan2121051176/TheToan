<?php
require('../config/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username = $username AND password ='$password'";
        $result = $conn->query($query);
        if ($result->num_rows === 1) {
            session_start();
            $_SESSION['username'] = $username;
            $row = mysqli_fetch_assoc($result);
            echo "<script>window.open('../index.php','_self')</script>";
            exit();
        } else {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('error_message').style.display = 'block';
                });
            </script>";
        }
    }
    $conn->close();
}
?>
<?php
require('../config/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['create_username']) && isset($_POST['create_password']) && isset($_POST['numberphone'])) {
        $username = $_POST['create_username'];
        $password = $_POST['create_password'];
        $numberphone = $_POST['numberphone'];
        $sql="select * from users where username = '$username' ";
        $kq=$conn->query($sql);
        if($kq->num_rows > 0) {
            echo"<script>alert('Tài Khoản đã tồn tại')</script>";
        }
        else{
        $query = "INSERT INTO users (username, password, numberphone) VALUES ('$username', '$password', '$numberphone')";
        $sql1 = mysqli_query($conn, $query);

        if ($sql1) {
            echo "<script>alert('Tạo tài khoản thành công')</script>";
            echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 200);</script>"; // Chuyển hướng sau 2 giây (2000 milliseconds)
            exit();
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
        
    }
}
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đăng nhập</title>
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <div class="back-button">
        <a href="javascript:history.go(-1)" style="text-decoration: none;padding-right:90%;color:black;"> <i class='fas fa-angle-double-left' style='font-size:1.3em'></i> </a>
    </div>
    <div class="logo">
        <div class="logo_container">
            <h1 class="text-primary fw-bold mb-0">Cửa hàng<span class="text-dark">Chu Thế Toàn</span> </h1>
            <p class="logo1">Thiên đường đồ ăn vặt,<br> <span style="margin-left: 5em;">luôn luôn mang đến cho bạn những sản phẩm và dịch vụ tốt nhất.</span></p>

        </div>

    </div>

    <div class="login-box">
        <h1 style="color:blue;font-family: Arial, Helvetica, sans-serif;"> Đăng Nhập</h1>
        <form action="login.php" method="post" id="login-form">
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Tên Đăng Nhập</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Mật Khẩu</label>
            </div>
            <div class="col3">
                <input type="submit" class="login" value="Đăng nhập"><br>
                <a href="#" class="forget" style="color:blue">Quên mật khẩu</a><br>
                <hr>
                <button class="register" id="register-button">Tạo Tài Khoản</button>
            </div>

        </form>
    </div>
    <div class="login-box" id="register-form" style="display:none;">
        <span id="close-button" style="cursor: pointer; position: absolute; top: 0; right: 0; font-size: 2em;">&times;</span>
        <h1 style="color: BLUE;">Đăng ký </h1>
        <form action="login.php" method="post">
            <div class="user-box">
                <input type="text" name="create_username" required="" id="username">
                <label>Tên đăng nhập</label>
            </div>
            <div class="user-box">
                <input type="password" name="create_password" required="" id="password" minlength="8">
                <label>Mật khẩu</label>
            </div>
            <div class="user-box">
                <input type="text" name="numberphone" required="" id="numberphone" minlength="10">
                <label>Số điện thoại</label>
            </div>
            <div class="user-box">
                <input type="password" name="repassword" required="" minlength="8" id="repassword">
                <label>Nhập lại mật khẩu</label>
                <p id="remote" style="color: red;"></p>
            </div>
            <div class="col3">
                <input type="submit" class="login" style="background-color: #42b72a" value="Tạo tài khoản"><br>
            </div>
        </form>
    </div>

    <script>
        document.getElementById("register-button").addEventListener("click", function() {
            document.getElementById("register-form").style.display = "block";
            document.getElementById("login-form").style.display = "none";
        });

        document.getElementById("close-button").addEventListener("click", function() {
            document.getElementById("register-form").style.display = "none";
            document.getElementById("login-form").style.display = "block";
        });


        var password = document.getElementById('password');
        var confirmPassword = document.getElementById('repassword');
        var remote = document.getElementById('remote');
        var pw1 = password.value;
        var pw2 = confirmPassword.value;

        function confirmpw() {
            var pw1 = password.value;
            var pw2 = confirmPassword.value;

            if (pw1 === pw2) {
                remote.innerHTML = 'Mật Khẩu trùng khớp!';
                remote.style = 'color :green';
            } else {
                remote.innerHTML = 'Mật Khẩu không khớp!';
                remote.style = 'color :red';
            }
        }
        confirmPassword.addEventListener('input', confirmpw)
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>