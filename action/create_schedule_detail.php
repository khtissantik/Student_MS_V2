
<?php
session_start();
include_once('../dbcon.php');
if (isset($_POST['create_schedule_detail'])) {
    
    $grade = mysqli_real_escape_string($con, $_POST['grade']);
    $class_type = mysqli_real_escape_string($con, $_POST['class_type']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    $acadyear = mysqli_real_escape_string($con, $_POST['acadyear']);
    $sch_time = mysqli_real_escape_string($con, $_POST['sch_time']);
    $sch_monday = mysqli_real_escape_string($con, $_POST['sch_monday']);
    $sch_tuesday = mysqli_real_escape_string($con, $_POST['sch_tuesday']);
    $sch_wednesday = mysqli_real_escape_string($con, $_POST['sch_wednesday']);
    $sch_thursday = mysqli_real_escape_string($con, $_POST['sch_thursday']);
    $sch_friday = mysqli_real_escape_string($con, $_POST['sch_friday']);
    $sch_saturday = mysqli_real_escape_string($con, $_POST['sch_saturday']);

    $query = "INSERT INTO tbl_schedule_detail (grade, class_type, time, acadyear, sch_time, sch_monday, sch_tuesday, sch_wednesday, sch_thursday, sch_friday, sch_saturday) VALUES
   ('$grade', '$class_type', '$time', '$acadyear', '$sch_time', '$sch_monday', '$sch_tuesday', '$sch_wednesday', '$sch_thursday', '$sch_friday', '$sch_saturday')";
    $query_run = mysqli_query($con, $query);
   
   if($query_run){
    header("Location:../view/schedule_detail.php?grade_id=".$grade."&time_id=".$time."&acadyear_id=".$acadyear."&class_type_id=".$class_type);
   }
   else{
    echo("Input Value Fail!!");
   }

  }
?>