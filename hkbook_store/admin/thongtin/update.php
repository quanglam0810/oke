<?php

$connect = mysql_connect("localhost", "root", "");
$csdl = "book_store";
mysql_select_db($csdl, $connect);
mysql_query("set names 'utf8'");
?>
<?php

if (isset($_POST['update'])) {
    $sdt_ud = $_POST['sdt'];    
    $diachi_ud = $_POST['diachi'];
    $info2 = $_POST['makh'];
    if ($diachi_ud != NULL and $sdt_ud != NULL) {
        $sql1 = "update nhanvien set SDT = '$sdt_ud',DiaChi ='$diachi_ud' where MaNV = '$info2'";
        mysql_query($sql1);
        header('location:../?ac=pf');
    }
    else { 
        echo'<script>alert("cập nhật thất bại")';
    }
} else {
    if(isset($_POST['updatemk']))
    {
        $mk1=$_POST['mk1'];
        $mk2=$_POST['mk2'];
        $mk22=$_POST['mk22'];
        $info2 = $_POST['makh'];
         if ($mk1 != NULL and $mk2 != NULL and $mk22 != NULL and $mk2==$mk22) {
        $sql1 = "update khachhang set MatKhau ='$mk2' where MaKH = '$info2'";
        mysql_query($sql1);
        header('location:../profile.php?ct=3');
    }
 else {
        header('location:../profile.php?ct=3');
    }
}
}
?>