<?php
if(isset($_GET['delete']) && !empty($_GET['delete'])) {
    $prd_id = $_GET['delete'];
    require('../config/connect.php');
    mysqli_set_charset($conn,'UTF8');
    $sql = "DELETE FROM products WHERE prd_id='$prd_id'";
  $result=$conn->query($sql);
    if($result===TRUE){
            echo "<script>alert('Xóa thành công')</script>";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'admin.php?quanly=product';
                    },500); 
                  </script>";
                }
    else {
        echo "<script>alert('Xóa thất bại')</script>";
    }
    $conn->close();
}
?>