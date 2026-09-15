<?php

$del1 = $_GET['del'];

include("../config.php");

$str = "delete from customer where ID_CUS = '$del1' ";
$obj = mysqli_query($conn,$str);

    if($obj){
        echo "<script>alert('User Deleted Successful'); </script>";
        echo "<meta http-equiv='refresh' content='0;URL=selectt.php'/>";
    }else{
        echo "Failed...";
        echo "<meta http-equiv='refresh' content='3;URL=selectt.php'/>";
    }


?>

?>