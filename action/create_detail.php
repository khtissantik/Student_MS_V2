
<?php
session_start();
include_once('../dbcon.php');

if (isset($_POST['create_detail'])) {
    
    $detail_kh = mysqli_real_escape_string($con, $_POST['detail_kh']);
    $acadyear = mysqli_real_escape_string($con, $_POST['acadyear']);
    $grade = mysqli_real_escape_string($con, $_POST['grade']);
    $time = mysqli_real_escape_string($con, $_POST['time']);

    $query = "INSERT INTO tbl_detail (detail_kh, acadyear, grade, time) VALUES
   ('$detail_kh', '$acadyear', '$grade', '$time')";
    $query_run = mysqli_query($con, $query);
   
   if($query_run){
    header("Location:../view/new_acadyear.php");
   }
   else{
    echo("Input Value Fail!!");
   }

  }
?>