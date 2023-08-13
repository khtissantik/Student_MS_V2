
<?php
session_start();
include_once('../dbcon.php');

if (isset($_POST['create_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $nationality = mysqli_real_escape_string($con, $_POST['nationality']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $acadyear = mysqli_real_escape_string($con, $_POST['acadyear']);
    $grade = mysqli_real_escape_string($con, $_POST['grade']);
    $class_type = mysqli_real_escape_string($con, $_POST['class_type']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    $pob_province = mysqli_real_escape_string($con, $_POST['pob_province']);
    $pob_district = mysqli_real_escape_string($con, $_POST['pob_district']);
    $pob_commune = mysqli_real_escape_string($con, $_POST['pob_commune']);
    $pob_village = mysqli_real_escape_string($con, $_POST['pob_village']);
    $father_name = mysqli_real_escape_string($con, $_POST['father_name']);
    $father_job = mysqli_real_escape_string($con, $_POST['father_job']);
    $mother_name = mysqli_real_escape_string($con, $_POST['mother_name']);
    $mother_job = mysqli_real_escape_string($con, $_POST['mother_job']);    
    $cur_province = mysqli_real_escape_string($con, $_POST['cur_province']);
    $cur_district = mysqli_real_escape_string($con, $_POST['cur_district']);
    $cur_commune = mysqli_real_escape_string($con, $_POST['cur_commune']);
    $cur_village = mysqli_real_escape_string($con, $_POST['cur_village']);
    $guardian_phone = mysqli_real_escape_string($con, $_POST['guardian_phone']);
    $telegram = mysqli_real_escape_string($con, $_POST['telegram']);
    $fb = mysqli_real_escape_string($con, $_POST['fb']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $img = mysqli_real_escape_string($con, $_POST['img']);
    $stu_modify_by = mysqli_real_escape_string($con, $_POST['stu_modify_by']);

    $query = "INSERT INTO tbl_student (student_id, name, gender, nationality, dob, acadyear, grade, class_type, time, pob_province, pob_district, pob_commune, pob_village,
    father_name, father_job, mother_name, mother_job, cur_province, cur_district, cur_commune, cur_village, guardian_phone, telegram, fb, email, img, stu_modify_by) VALUES 
    ('$student_id', '$name', '$gender', '$nationality', '$dob', '$acadyear', '$grade', '$class_type', '$time', '$pob_province', '$pob_district', '$pob_commune', '$pob_village',
    '$father_name', '$father_job', '$mother_name', '$mother_job', '$cur_province', '$cur_district', '$cur_commune', '$cur_village', '$guardian_phone', '$telegram', '$fb', '$email', '$img', '$stu_modify_by')";
    $query_run = mysqli_query($con, $query);
   
   if($query_run){
    header("Location:../view/student.php");
   }
   else{
    echo("Input Value Fail!!");
   }

  }
?>