
<?php
session_start();
include_once('../dbcon.php');

if (isset($_POST['create_class'])) {
    
    $class_grade = mysqli_real_escape_string($con, $_POST['class_grade']);
    $class_type = mysqli_real_escape_string($con, $_POST['class_type']);
    $teach_name = mysqli_real_escape_string($con, $_POST['teach_name']);
    $class_time = mysqli_real_escape_string($con, $_POST['class_time']);
    $class_acadyear = mysqli_real_escape_string($con, $_POST['class_acadyear']);
    $class_modify_by = mysqli_real_escape_string($con, $_POST['class_modify_by']);

    $query = "INSERT INTO tbl_class (class_grade, class_type, teach_name, class_time, class_acadyear, class_modify_by) VALUES
   ('$class_grade', '$class_type', '$teach_name', '$class_time', '$class_acadyear', '$class_modify_by')";
    $query_run = mysqli_query($con, $query);
   
   if($query_run){
    header("Location:../view/class.php");
   }
   else{
    echo("Input Value Fail!!");
   }

  }
?>