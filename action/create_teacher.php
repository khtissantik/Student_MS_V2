
<?php
session_start();
include_once('../dbcon.php');

if (isset($_POST['create_teacher'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $nationality = mysqli_real_escape_string($con, $_POST['nationality']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $marital = mysqli_real_escape_string($con, $_POST['marital']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $pob_province = mysqli_real_escape_string($con, $_POST['pob_province']);
    $pob_district = mysqli_real_escape_string($con, $_POST['pob_district']);
    $pob_commune = mysqli_real_escape_string($con, $_POST['pob_commune']);
    $pob_village = mysqli_real_escape_string($con, $_POST['pob_village']);
    $identity_no = mysqli_real_escape_string($con, $_POST['identity_no']);
    $telegram = mysqli_real_escape_string($con, $_POST['telegram']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $cur_province = mysqli_real_escape_string($con, $_POST['cur_province']);
    $cur_district = mysqli_real_escape_string($con, $_POST['cur_district']);
    $cur_commune = mysqli_real_escape_string($con, $_POST['cur_commune']);
    $cur_village = mysqli_real_escape_string($con, $_POST['cur_village']);
    $teach_modify_by = mysqli_real_escape_string($con, $_POST['teach_modify_by']);

    $query = "INSERT INTO tbl_teacher (name, gender, nationality, dob, marital, phone, pob_province, pob_district, pob_commune, pob_village, identity_no, telegram, email, cur_province, cur_district, cur_commune, cur_village, teach_modify_by) VALUES 
    ('$name', '$gender', '$nationality', '$dob', '$marital', '$phone', '$pob_province', '$pob_district', '$pob_commune', '$pob_village', '$identity_no', '$telegram', '$email', '$cur_province', '$cur_district', '$cur_commune', '$cur_village', '$teach_modify_by')";
    $query_run = mysqli_query($con, $query);
   
   if($query_run){
    header("Location:../view/teacher.php");
   }
   else{
    echo("Input Value Fail!!");
   }

  }
?>