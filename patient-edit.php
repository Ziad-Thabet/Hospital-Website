<?php
session_start();
require './Connection/db_conn.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Patient Edit</title>
</head>
<body>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Paient Edit 
                            <a href="mainpa.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $Patient_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM Patient WHERE Id='$Patient_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $Patient = mysqli_fetch_array($query_run);

                                ?>
                                <form action="codep.php" method="POST">
                                    <input type="hidden" name="Patient_id" value="<?= $Patient['Id']; ?>">

                                    <div class="mb-3">
                                        <label>UserId</label>
                                        <input type="text" name="UserId" value="<?=$Patient['UserId'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>CustodianId</label>
                                        <input type="text" name="CustodianId" value="<?=$Patient['CustodianId'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>CustodianName</label>
                                        <input type="text" name="CustodianName" value="<?=$Patient['CustodianName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="text" name="Phone" value="<?=$Patient['Phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="Address" value="<?=$Patient['Address'];?>" class="form-control">
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label>ImageName</label>
                                        <input type="file" name="ImageName" value="<?=$Patient['ImageName'];?>" class="form-control">
                                    </div> -->
                                    <div class="mb-3">
                                        <button type="submit" name="Update_Patient" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>