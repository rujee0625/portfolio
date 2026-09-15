<?php

include("../config.php");

$Date = $_POST['Date'];
$Time = $_POST['Time'];
$D_Name = $_POST['D_Name'];
$C_Name = $_POST['C_Name'];
$From = $_POST['From'];
$Tu = $_POST['Tu'];
$Fee = $_POST['Fee'];
$Status_P = $_POST['Status_P'];

    $str = "insert into customer (`Date`,`Time`,D_Name,C_Name,`From`,Tu,Fee,Status_P) values ('$Date','$Time','$D_Name','$C_Name','$From','$Tu','$Fee','$Status_P')";
    $obj1 = mysqli_query($conn,$str);

    if($obj1){
        echo "Success...";
        echo "<meta http-equiv='refresh' content='3;URL=selectt.php'/>";
    }else{
        echo "Failed...";
        echo "<meta http-equiv='refresh' content='3;URL=insert.php'/>";
    }

?>