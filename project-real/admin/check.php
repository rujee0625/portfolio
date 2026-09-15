<?php
session_start();
include("../config.php");


$A_User = mysqli_real_escape_string($conn,$_POST['adUser']);
$A_Pass = md5($_POST['adPass']);

$str = "select * from admin where A_user = '$A_User' and A_pass = '$A_Pass'";
$obj = mysqli_query($conn,$str);


if($obj && mysqli_num_rows ($obj)==1){
    echo "ยินดีต้อนรับเข้าสู่ระบบหลังบ้าน SAWASDEETRANS";
    $_SESSION['user'] = $A_User;
    echo "<meta http-equiv='refresh' content='3;URL=selectt.php'/>";
}else{
    echo "รหัสไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง";
    echo "<meta http-equiv='refresh' content='3;URL=home.php'/>";
}

?>