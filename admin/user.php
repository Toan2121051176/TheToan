        <div class="khachhang">
            <table class="table-header">
                <tr>
                    <th title="Sắp xếp" style="width: 15%">Tên đăng nhập </th>
                    <th title="Sắp xếp" style="width: 20%">Số điện thoại </th>
                    <th title="Sắp xếp" style="width: 20%">mật khẩu </th>
                    <th style="width: 10%">Địa chỉ</th>
                </tr>
                <?php
                require('../config/connect.php');
                mysqli_set_charset($conn,'utf8');
                $sql_user="select * from users ";
                $result_user=$conn->query($sql_user);
                if ($result_user->num_rows>0){
                    while($row=$result_user->fetch_assoc()){
                        echo "<tr>
                        <td style='text-align:center'>" . $row["username"] . "</td>
                        <td style='text-align:center'>" . $row["password"] . "</td>
                        <td style='text-align:center'>" . $row["numberphone"] . "</td>
                        <td style='text-align:center'>" . $row["address"] . "</td>
                        </tr>";
                }
            }
                ?>
            </table>

            <div class="table-content">
            </div>

            <div class="table-footer">
                <button onclick="document.getElementById('khungThemKhachHang').style.display = 'block'">
                    <i class="fa fa-plus-square"></i>
                    Thêm Người Dùng
                </button>
            </div>
        </div>

        <div id="khungThemKhachHang" style="display: none;" class="adduser">

            <table class="overlayTable table-outline table-content table-header">
                <tr>
                    <th colspan="2">Thêm Người Dùng</th>
                </tr>
                <tr>
                    <td>UID:</td>
                    <td><input type="text" id="UID" required></td>
                </tr>
                <tr>
                    <td>Tên Đăng Nhập:</td>
                    <td><input type="text" required></td>
                </tr>
                <tr>
                    <td>Mật Khẩu:</td>
                    <td><input type="text" style="height: 5em;" required></input>
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" required></td>
                </tr>
                <tr>
                    <td>Số Điện Thoại:</td>
                    <td><input type="text" required></td>
                </tr>


                <tr>
                    <td colspan="2" class="table-footer"><button style="width: 5em;border-radius:0.3em; height: 3em;background-color:  #F28123;color: white;" onclick="document.getElementById('khungThemKhachHang').style.display='none'">Hủy</button> <input type="submit" style="width: 10em;height: 3em;background-color:  #F28123;color: white;"
                            value="Thêm Người Dùng"> </td>
                </tr>
            </table>
        </div>