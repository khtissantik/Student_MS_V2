
<?php
session_start();
include_once('../dbcon.php');

if (isset($_POST['create_subject'])) {
    
    $subject_kh = mysqli_real_escape_string($con, $_POST['subject_kh']);

    $query = "INSERT INTO tbl_subject (subject_kh) VALUES
   ('$subject_kh')";
    $query_run = mysqli_query($con, $query);
   
   if($query_run){
    header("Location:../view/subject.php");
   }
   else{
    echo("Input Value Fail!!");
   }

  }
?>