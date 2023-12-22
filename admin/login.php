<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        
        .container {
            width: 300px;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .container form {
            display: flex;
            flex-direction: column;
        }
        
        .container label {
            margin-bottom: 5px;
        }
        
        .container input[type="text"],
        .container input[type="password"],
        .container input[type="submit"] {
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        
        .container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="login.php" method="post">
            <label>Tên đăng nhập:</label>
            <input type="text" id="username" name="username">
            <label>Password</label>
            <input type="password" id="password" name="password">
            <p id="error_message" style="display:none ;color: red;text-align: center;">sai tên đăng nhập hoặc mật khẩu</p>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>
<?php
    require('../config/connect.php');
    session_start();
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $_SESSION['username'] = $username;
            echo"<script>alert('Xin chào,bạn là admin')</script>";
            echo "<script>window.location.href = 'admin.php';</script>";
            exit();
        } else {
            echo '<script>document.getElementById("error_message").style.display = "block";</script>';
        }
    }
    ?>
    