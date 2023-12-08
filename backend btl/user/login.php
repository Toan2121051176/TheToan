<?php
require("../config/connect.php");

    if (isset($_POST["newusername"]) && isset($_POST['newuserpassword']) && isset($_POST['newuseremail'])) {
        $username = $_POST["newusername"];
        $password = $_POST["newuserpassword"];
        $email = $_POST["newuseremail"];

        // Sử dụng câu lệnh chuẩn bị để tránh tấn công SQL Injection
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $email);
        $check_duplicate = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $check_duplicate);

        if ($stmt->execute()) {
            echo "<script>alert('Đăng ký thành công');</script>";
        } else {
            echo "<script>alert('Đăng ký thất bại');</script>";
        }

        $stmt->close();
        $conn->close();
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Tên người dùng đã tồn tại. Vui lòng chọn tên khác.');</script>";
        } else {
            // Sử dụng câu lệnh chuẩn bị để tránh tấn công SQL Injection
            $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $password, $email);

            if ($stmt->execute()) {
                echo "<script>alert('Đăng ký thành công');</script>";
            } else {
                echo "<script>alert('Đăng ký thất bại');</script>";
            }

            $stmt->close();
        }

        $conn->close();
    }
?>
<?php
require("../config/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Kiểm tra tên người dùng và mật khẩu trong cơ sở dữ liệu
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

       
        if (mysqli_num_rows($result) > 0) {
            // Đăng nhập thành công
            echo "<script>alert('Đăng nhập thành công');</script>";

            // Chuyển hướng về trang shop
            echo "<script>window.location.href = '../page/index.php';</script>";
        }
         else
          {
            echo "<script>alert('Đăng nhập thất bại');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <!-- partial:index.partial.html -->

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="login.php" method="post">
                <h1>Tạo tài khoản mới </h1>
                <div class="social-container">

                </div>
                <span>Đăng kí tài khoản của bạn</span>
                <input type="text" name="newusername" placeholder="UserName" />
                <input type="email" name="newuseremail" placeholder="Email" />
                <input type="password" name="newuserpassword" placeholder="Password" />
              <button type="submit"> Đăng Kí</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="post">
                <h1>Đăng nhập</h1>
                <div class="social-container">

                </div>
                <span>Đăng nhập tài khoản của bạn</span>
                <input type="text" name="username" placeholder="UserName" />
                <input type="password" name="password" placeholder="Password" />
                <a href="#">Quên mật khẩu ?</a>
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng bạn !</h1>
                    <p>Nếu đã có tài khoản vui lòng đăng nhập</p>
                    <button class="ghost" id="signIn">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Xin chào!</h1>
                    <p>Nếu bạn chưa có tài khoản vui lòng đăng ký</p>
                    <button class="ghost" id="signUp">Đăng Ký</button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    

</body>
<script>
        const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
    </script>
</html>