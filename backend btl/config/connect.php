<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = 'toanbtl';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo"lỗi".$conn->connect_error;
}
?>