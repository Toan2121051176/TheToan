<div class="sanpham">
        <?php
            require('../config/connect.php');
            mysqli_set_charset($conn, 'utf8');
            $sql = 'SELECT * FROM products';
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                echo "<table class='table-header'>
            <tr>
                <!-- Theo độ rộng của table content -->
                <th style='width: 10%;background-color: yellow;'>Mã Sản Phẩm </th>
                <th style='width: 10%;background-color: yellow;'>Tên sản Phẩm </th>
                <th style='width: 25%;background-color: yellow;'>Mô tả</th>
                <th style='width: 10%;background-color: yellow;'>số lượng</th>
                <th style='width: 15%;background-color: yellow;'>Hình ảnh</th>
                <th style='width: 10%;background-color: yellow;'>Giá</th>
                <th style='width: 10%;background-color: yellow;'>Loại</th>
                <th style='width: 10%;background-color: yellow;'>Hành động</th>
            </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                $img_prd = $row['prd_img'];
                $path='image/';
                $img_path = $path . $img_prd;
                echo "<tr>
                        <td style='text-align:center'>" . $row["prd_id"] . "</td>
                        <td style='text-align:center'>" . $row["prd_name"] . "</td>
                        <td style='text-align:center'>" . $row["prd_detail"] . "</td>
                        <td style='text-align:center'>" . $row["prd_quantity"] . "</td>
                        <td class='img-prd' style='text-align: center;'><img src='" . $img_path . "' alt='Ảnh sản phẩm' style='width: 5em; height: 5em; display: inline-block;'></td>
                        <td style='text-align:center'>" . $row["prd_price"] . "</td>
                        <td style='text-align:center'>" . $row["prd_category"] . "</td>
                        <td style='text-align:center'>
                        <div style='display:flex;justify-content:space between;margin:2em'>
                        <button><a href='mode.php?delete=" . $row['prd_id'] . "'><i style='color:red;font-size:1.7em' class='fa fa-trash-o'></i></a></button>
                        </div>
                       
                    </td>
                    
                      </tr>";
            }
            

    echo "</table>";
} 
?>

<a href='mode.php?delete=$row['prd_id']'></a>
            <div class="table-content">
            </div>

            <div class="table-footer">
                <button onclick="document.getElementById('khungThemSanPham').style.transform = 'scale(1)';">
                    <i class="fa fa-plus-square"></i>
                    Thêm sản phẩm
                </button>
            </div>
            <form method="post" action="admin.php?quanly=product" enctype="multipart/form-data">

            <div id="khungThemSanPham" class="overlay">
             <span class="close" onclick="this.parentElement.style.transform = 'scale(0)';">&times;</span>
                        <table class="overlayTable table-outline table-content table-header">
                    <tr>
                        <th colspan="2">Thêm Sản Phẩm</th>
                    </tr>
                    <tr>
                        <td>Mã sản phẩm:</td>
                        <td><input type="text" name="masp" id="maspThem" required></td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm:</td>
                        <td><input type="text" name="tensp" required></td>
                    </tr>
                    <tr>
                        <td>Ảnh sản phẩm</td>
                        <td><input type="file" name="anhsp" required></td>
                    </tr>
                    <tr>
                        <td>Mô tả sản phẩm:</td>
                        <td><textarea style="height: 5em;" name="motasp" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Số lượng:</td>
                        <td><input type="text" name="soluongsp" required></td>
                    </tr>
                    <tr>
                        <td>Giá:</td>
                        <td><input type="text" name="giasp" required></td>
                    </tr>
                    <tr>
                        <td>Loại hàng hóa</td>
                        <td>
                            <select name="choncatgory">
                                <option value="Đồ ăn">Đồ Ăn</option>
                                <option value="Đồ uống">Đồ Uống</option>
                            </select>
                        </td>
                    </tr>

            <tr>
                  <td colspan="2" class="table-footer"> <input type="submit" style="width: 10em;height: 3em;background-color:  #F28123;color: white;" value="Thêm sản phẩm"> </td>
                 </tr>
            </table>
            </div>
            </form>
            <?php
            if (
                isset($_POST['masp']) &&
                isset($_POST['tensp']) &&
                isset($_FILES['anhsp']) &&
                isset($_POST['motasp']) &&
                isset($_POST['soluongsp']) &&
                isset($_POST['giasp']) &&
                isset($_POST['choncatgory'])
            ) {
                require('../config/connect.php');

                $masp =$_POST['masp'];
                $tensp = $_POST['tensp'];
                $mota = $_POST['motasp'];
                $soluong = $_POST['soluongsp'];
                $giasp = $_POST['giasp'];
                $choncatgory = $_POST['choncatgory'];
                $prd_img_name = $_FILES['anhsp']['name'];
                $target_dir = 'image/';
                $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["anhsp"]["tmp_name"]);

                if ($check !== false) {
                    if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                        $query = "SELECT * FROM products WHERE prd_id = '$masp'";
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            echo "<script>alert('Sản phẩm đã tồn tại')</script>";
                        } else {
                            $insert_query = "INSERT INTO products (prd_id, prd_name, prd_detail, prd_price, prd_quantity, prd_img, prd_category) VALUES ('$masp', '$tensp', '$mota', '$giasp', '$soluong', '$prd_img_name', '$choncatgory')";
                            if ($conn->query($insert_query) === TRUE) {
                                echo "<script>alert('Thêm sản phẩm thành công')</script>";
                                echo "<script>window.location = 'admin.php?quanly=product'</script>";
                            } else {
                                echo "<script>alert('Thêm sản phẩm không thành công')</script>";
                            }
                        }
                    } else {
                        echo "<script>alert('Xin lỗi, đã có lỗi khi tải file của bạn.')</script>";
                    }
                } else {
                    echo "<script>alert('File không phải là ảnh.')</script>";
                }

                $conn->close();
            }
            ?>

            <div id="khungSuaSanPham" class="overlay"></div>
        </div>