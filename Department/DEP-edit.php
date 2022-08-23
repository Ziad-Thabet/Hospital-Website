<?php
session_start();
require '../Connection/db_conn.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Department Edit</title>
</head>
<body>
<style>
        body{
            background-image: url(../images/Hospital.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Department Edit 
                            <a href="mainDEP.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $DEP_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM department WHERE Id='$DEP_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $DEP = mysqli_fetch_array($query_run);

                                ?>
                                <form action="codeDEP.php" method="POST">
                                    <div class="mb-3">
                                        <label>ID</label>
                                        <input type="text" name="Id" value="<?=$DEP['Id'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DepartmentName</label>
                                        <input type="text" name="Name" value="<?=$DEP['Name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="Update_DEP" class="btn btn-primary">
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