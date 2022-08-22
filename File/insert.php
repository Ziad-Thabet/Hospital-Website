<?php 

if(isset($_POST['UserName']) && 
isset($_POST['UserType']) && 
isset($_POST['Email'])    &&
isset($_POST['Pass'])){
       include "../Connection/db_conn.php";


    $UserName = $_POST['UserName'];
    $UserType = $_POST['UserType'];
    $Email = $_POST['Email'];
    $Pass = $_POST['Pass'];

    $data = "UserName=".$UserName."UserType=".$UserType."Email=".$Email;
    
    if (empty($UserName)) {
    	$em = "Full name is required";
    	header("Location: Registration.php?error=$em&$data");
	    exit;
    }else if(empty($UserType)){
    	$em = "User Type is required";
    	header("Location: Registration.php?error=$em&$data");
	    exit;
    }
    else if(empty($Email)){
    	$em = "Email is required";
    	header("Location: Registration.php?error=$em&$data");
	    exit;
    }else if(empty($Pass)){
    	$em = "Password is required";
    	header("Location: Registration.php?error=$em&$data");
	    exit;
    }else {
        if(isset($_SESSION['Email'])==$Email)
        {
            $em = "Email Aleardy exists";
    	header("Location: Registration.php?error=$em");
	    exit;
        }


        $sql = "INSERT INTO user (UserName, UserType, Email, Pass) VALUES ('$UserName','$UserType','$Email','$Pass')";  
        mysqli_query($conn,$sql);
    	header("Location: Receptionist.php?success=Your account has been created successfully");
	    exit;
    }


}else {
	header("Location: Registration.php?error=error");
	exit;
}