<?php
session_start();
require './Connection/db_conn.php';

if(isset($_POST['Delete_Patient']))
{
    $Patient_Id = mysqli_real_escape_string($conn, $_POST['Delete_Patient']);

    $query = "DELETE FROM patient WHERE Id='$Patient_Id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Deleted Successfully";
        header("Location: mainpa.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Deleted";
        header("Location: mainpa.php");
        exit(0);
    }
}

if(isset($_POST['Update_Patient']))
{
    $User_Id = mysqli_real_escape_string($conn, $_POST['Patient_id']);

    $UserId = mysqli_real_escape_string($conn, $_POST['UserId']);
    $CustodianId = mysqli_real_escape_string($conn, $_POST['CustodianId']);
    $CustodianName = mysqli_real_escape_string($conn, $_POST['CustodianName']);
    $Phone = mysqli_real_escape_string($conn, $_POST['Phone']);
    $Address = mysqli_real_escape_string($conn, $_POST['Address']);
    // $ImageName = mysqli_real_escape_string($conn, $_POST['ImageName']);

    $query = "UPDATE patient SET UserId='$UserId', CustodianId='$CustodianId', CustodianName='$CustodianName', Phone='$Phone' , Address='$Address', ImageName='$ImageName'WHERE Id='$User_Id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: mainpa.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Updated";
        header("Location: mainpa.php");
        exit(0);
    }

}


if(isset($_POST['Save']))
{
    $UserId = mysqli_real_escape_string($conn, $_POST['UserId']);
    $CustodianId = mysqli_real_escape_string($conn, $_POST['CustodianId']);
    $CustodianName = mysqli_real_escape_string($conn, $_POST['CustodianName']);
    $Phone = mysqli_real_escape_string($conn, $_POST['Phone']);
    $Address = mysqli_real_escape_string($conn, $_POST['Addres']);
    $ImageName = mysqli_real_escape_string($conn, $_POST['ImageName']);
    $query = "INSERT INTO patient (UserId,CustodianId,CustodianName,Phone,Addres) VALUES ('$UserId','$CustodianId','$CustodianName','$Phone','$Address')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "patient Created Successfully";
        header("Location: patient-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "patient Not Created";
        header("Location: patient-create.php");
        exit(0);
    }
}

?>