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

    <title>Doctor Edit</title>
</head>
<body>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Doctor Edit 
                            <a href="mainD.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $DOC_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM doctor WHERE Id='$DOC_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $DOC = mysqli_fetch_array($query_run);

                                ?>
                                <form action="codeD.php" method="POST">
                                    <input type="hidden" name="DOC" value="<?= $DOC['Id']; ?>">

                                    <div class="mb-3">
                                        <label>UserID</label>
                                        <input type="text" name="UserID" value="<?=$DOC['UserID'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DepartmentType</label>
                                        <input type="text" name="DepartmentType" value="<?=$DOC['DepartmentType'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Salary</label>
                                        <input type="text" name="Salary" value="<?=$DOC['Salary'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Rating</label>
                                        <input type="number" name="Rating" value="<?=$DOC['Rating'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="Update_DOC" class="btn btn-primary">
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