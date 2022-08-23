<?php
session_start();
require './Connection/db_conn.php';

if(isset($_POST['Delete_User']))
{
    $User_Id = mysqli_real_escape_string($conn, $_POST['Delete_User']);

    $query = "DELETE FROM user WHERE Id='$User_Id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Deleted Successfully";
        header("Location: main.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Deleted";
        header("Location: main.php");
        exit(0);
    }
}

if(isset($_POST['Update_User']))
{
    $User_Id = mysqli_real_escape_string($conn, $_POST['User_id']);

    $UserName = mysqli_real_escape_string($conn, $_POST['UserName']);
    $UserType = mysqli_real_escape_string($conn, $_POST['UserType']);
    $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Pass = mysqli_real_escape_string($conn, $_POST['Pass']);

    $query = "UPDATE user SET UserName='$UserName', UserType='$UserType', Gender='$Gender',Email='$Email', Pass='$Pass' WHERE Id='$User_Id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: main.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Updated";
        header("Location: main.php");
        exit(0);
    }

}


if(isset($_POST['Save_User']))
{
    $UserName = mysqli_real_escape_string($conn, $_POST['UserName']);
    $UserType = mysqli_real_escape_string($conn, $_POST['UserType']);
    $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Pass = mysqli_real_escape_string($conn, $_POST['Pass']);

    $query = "INSERT INTO user (UserName,UserType,Gender,Email,Pass) VALUES ('$UserName','$UserType','$Gender','$Email','$Pass')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "User Created Successfully";
        header("Location: user-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Created";
        header("Location: User-create.php");
        exit(0);
    }
}

?>