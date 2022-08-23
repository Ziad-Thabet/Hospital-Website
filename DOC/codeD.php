<?php
session_start();
require '../Connection/db_conn.php';

if(isset($_POST['Delete_DOC']))
{
    $DOC_Id = mysqli_real_escape_string($conn, $_POST['Delete_DOC']);

    $query = "DELETE FROM doctor WHERE Id='$DOC_Id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Doctor Deleted Successfully";
        header("Location: mainD.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Doctor Not Deleted";
        header("Location: mainD.php");
        exit(0);
    }
}

if(isset($_POST['Update_DOC']))
{
    $DOC = mysqli_real_escape_string($conn, $_POST['DOC']);

    $UserID = mysqli_real_escape_string($conn, $_POST['UserID']);
    $DepartmentType = mysqli_real_escape_string($conn, $_POST['DepartmentType']);
    $Salary = mysqli_real_escape_string($conn, $_POST['Salary']);
    $Rating = mysqli_real_escape_string($conn, $_POST['Rating']);

    $query = "UPDATE doctor SET UserID='$UserID', DepartmentType='$DepartmentType', Salary='$Salary', Rating='$Rating' WHERE Id='$DOC'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Doctor Updated Successfully";
        header("Location: mainD.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Doctor Not Updated";
        header("Location: mainD.php");
        exit(0);
    }

}


if(isset($_POST['Save']))
{
    $UserID = mysqli_real_escape_string($conn, $_POST['UserID']);
    $DepartmentType = mysqli_real_escape_string($conn, $_POST['DepartmentType']);
    $Salary = mysqli_real_escape_string($conn, $_POST['Salary']);
    $Rating = mysqli_real_escape_string($conn, $_POST['Rating']);
    $query = "INSERT INTO doctor (UserID,DepartmentType,Salary,Rating) VALUES ('$UserID','$DepartmentType','$Salary','$Rating')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Doctor Created Successfully";
        header("Location: DOC-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Doctor Not Created";
        header("Location: DOC-create.php");
        exit(0);
    }
}

?>