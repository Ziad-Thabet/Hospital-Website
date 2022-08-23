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

    <title>Doctor</title>
</head>
<body>
    <style>
        body{
            background-image: url(../images/Hospital.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Department Details
                            <a href="../File/./Receptionist.php" class="btn btn-danger float-end" style="position: relative; left: 10px;">Back</a>
                            <a href="./DEP-create.php" class="btn btn-primary float-end">Add New Department</a>
                            </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Department Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM department";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $Department)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $Department['Id']; ?></td>
                                                <td><?= $Department['Name']; ?></td>
                                                <td>
                                                    <a href="./DEP-View.php?id=<?= $Department['Id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="./DEP-edit.php?id=<?= $Department['Id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="codeDEP.php" method="POST" class="d-inline">
                                                        <button type="submit" name="Delete_DEP" value="<?=$Department['Id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>