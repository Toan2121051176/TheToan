<?php
session_start();
if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
    header("Location:admin.php"); // Điều hướng về trang chủ sau khi đăng xuất
exit;
}
?>