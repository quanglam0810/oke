<?php
$connect = mysql_connect("localhost", "root", "");
$csdl = "book_store";
mysql_select_db($csdl, $connect);
mysql_query("set names 'utf8'");
?>
<?php
$info = $_SESSION['ma_nv'];
$sql = "select * from nhanvien where MaNV='$info'";
$run_cart = mysql_query($sql);
?>
<?php
while ($dong_cart = mysql_fetch_array($run_cart)) {
    $sdt = $dong_cart['SDT'];
    $email = $dong_cart['TaiKhoan'];
    $diachi = $dong_cart['DiaChi'];
}
?>
<style>
     
    .block{         
    }
    .block .mid{  
        width: 85%;
        margin-left: auto;
        margin-right: auto;
    }
    .block .mid h1{
        font-size: 1.5em;
        color: #004a80;
        align-content: center;
        margin-bottom: 20px;
    }
    .block .mid table{
        font-size: 1.2em;
        color:#002142;      
        padding: 10px; 
        margin-bottom: 80px;

    }
    .block .mid table tr{
        width: 90%;      
        padding: 10px;

    }
    .block .mid table tr td input{
        width:500px;      
        padding: 10px;
        height: 35px;

    }
    .block .mid table tr td#label{       
        border:1px solid white;
        padding: 10px;
        width: 150px;

    }
    .block .mid table tr td#radio input{              
        width:20px;
        height:20px;
    }
    .block .mid table tr td button{              
        width:120px;
        height:40px;
        float:right;
        margin-right: 50px;
        background:#002142;
        color: #fff;
        font-size:0.9em;
    }
</style>
<div class='mid'>
    <h1>THÔNG TIN TÀI KHOẢN</h1>
    <form action="thongtin/update.php" method="POST">
        <table border="1">       
            <tr>
                <td id='label'>Họ Tên:</td>
                <td><?php
                    echo $_SESSION['name_nv'];
                    ?></td>
            </tr>
            <tr>
                <td id='label'>Tên Đăng Nhập:</td>
                <td><?php
                    echo $email
                    ?></td>
            </tr>
             <tr>
                <td id='label'>Chức vụ:</td>
                <td><?php
                    echo $_SESSION['tenquyen'];
                    ?></td>
            </tr>
            <tr>
                <td id='label'>Số Điện Thoại:</td>
                <td><input name ='sdt' type='number' placeholder="<?php
                    echo'0';echo $sdt;
                    ?>"></td>
            </tr>
            <tr>
                <td id='label'>Địa Chỉ Nhà:</td>
                <td><input name ='diachi' type='input' placeholder="<?php
                    echo $diachi;
                    ?>"></td>
            </tr>
            <tr>    
                <td id='label'>Giới Tính:</td>
                <td id='radio'>   
                    <p>
                        <input name ='1' type='radio' value="1">Nam
                        <input name ='1' type='radio' value="1">Nữ</p>
                </td>
            </tr>
            <tr> 
                <td id='label'></td>
                <td>
                    <input type='hidden' name='makh' value='<?php echo$info; ?>'>
                    <button type="submit" name ="update" >CẬP NHẬT</button></td>
            </tr>      
        </table> 
    </form>
</div>