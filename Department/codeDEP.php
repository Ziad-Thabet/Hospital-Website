<?php
session_start();
require '../Connection/db_conn.php';

if(isset($_POST['Delete_DEP']))
{
    $DEP_Id = mysqli_real_escape_string($conn, $_POST['Delete_DEP']);

    $query = "DELETE FROM department WHERE Id='$DEP_Id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Department Deleted Successfully";
        header("Location: mainDEP.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Department Not Deleted";
        header("Location: mainDEP.php");
        exit(0);
    }
}

if(isset($_POST['Update_DEP']))
{
    $DEP = mysqli_real_escape_string($conn, $_POST['Id']);

    $Name = mysqli_real_escape_string($conn, $_POST['Name']);


    $query = "UPDATE department SET Id='$DEP', Name='$Name' WHERE Id='$DEP'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Department Updated Successfully";
        header("Location: mainDEP.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Department Not Updated";
        header("Location: mainDEP.php");
        exit(0);
    }

}


if(isset($_POST['Save']))
{
    $Id = mysqli_real_escape_string($conn, $_POST['Id']);
    $DepartmentName = mysqli_real_escape_string($conn, $_POST['Name']);
    $query = "INSERT INTO department (Id,Name) VALUES ('$Id','$DepartmentName')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Department Created Successfully";
        header("Location: DEP-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Department Not Created";
        header("Location: DEP-create.php");
        exit(0);
    }
}

?>