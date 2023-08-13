<?php
session_start();
include "dbcon.php";

if (isset($_POST['user']) && isset($_POST['pass'])) {
 
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['user']);
	$pass = validate($_POST['pass']);

	if (empty($uname)) {
		header("Location: index.php?error=Userame is required");
		exit();
	} else if (empty($pass)) {
		header("Location: index.php?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM tbl_user WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['username'] === $uname && $row['password'] === $pass) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['fullname'] = $row['fullname'];
				$_SESSION['user_id'] = $row['user_id'];
				header("Location:view/index.php");
				exit();
			} else {
				header("Location: index.php?error=Incorect Username or password");
				exit();
			}
		} else {
			header("Location: index.php?error=Incorect Username or password");
			exit();
		}
	}
} else {
	header("Location: index.php");
	exit();
}
