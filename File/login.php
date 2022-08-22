<?php 
session_start(); 
include "../Connection/db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

if (empty($email)) {
	header("Location: index.php?error=Email is required");
	exit();
}else if(empty($pass)){
	header("Location: index.php?error=Password is required");
	exit();
}else{
	$sql = "SELECT * FROM user WHERE Email='$email' AND Pass='$pass'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		
		if ($row['Email'] === $email && $row['Pass'] === $pass) {
			$_SESSION['UserName'] = $row['UserName'];
			$_SESSION['UserType'] = $row['UserType'];
			$_SESSION['Id'] = $row['Id'];
			if($row["UserType"]=="Patient"){
				header("Location: Patient.php");
				exit();
			}
			if($row["UserType"]=="Doctor"){
				header("Location: Doctor.php");
				exit();
			} 
			if($row["UserType"]=="QualitManger"){
				header("Location: QualitManger.php");
				exit();
			} 
			if($row["UserType"]=="Custdion"){
				header("Location: Custdion.php");
				exit();
			} 
			if($row["UserType"]=="Receptionist"){
				header("Location: Receptionist.php");
				exit();
			}
		}
		else{
			header("Location: index.php?error=Incorect Email or password");
			exit();
		}
	}else{
		header("Location: index.php?error=Incorect Email or password");
		exit();
	}
}
	
}else{
	header("Location: ../Registration/index.php");
	exit();
}