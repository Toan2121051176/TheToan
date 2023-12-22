<?php
$severname = 'localhost';
$username = 'root';
$password ='';
$db = 'DCĐ-store';
$conn= new mysqli($severname,$username,$password,$db);
if ($conn->connect_error)
{
    echo"lỗi kết nối!!!";
}

?>