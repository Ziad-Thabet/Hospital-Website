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
                        <h4>Doctor Details
                            <a href="../File/./Receptionist.php" class="btn btn-danger float-end" style="position: relative; left: 10px;">Back</a>
                            <a href="./DOC-create.php" class="btn btn-primary float-end">Add More Information</a>
                            </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>UserID</th>
                                    <th>DepartmentType</th>
                                    <th>Salary</th>
                                    <th>Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM doctor";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $Patient)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $Patient['Id']; ?></td>
                                                <td><?= $Patient['UserID']; ?></td>
                                                <td><?= $Patient['DepartmentType']; ?></td>
                                                <td><?= $Patient['Salary']; ?></td>
                                                <td><?= $Patient['Rating']; ?></td>
                                                <td>
                                                    <a href="./DOC-View.php?id=<?= $Patient['Id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="./DOC-edit.php?id=<?= $Patient['Id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="codeD.php" method="POST" class="d-inline">
                                                        <button type="submit" name="Delete_DOC" value="<?=$Patient['Id'];?>" class="btn btn-danger btn-sm">Delete</button>
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