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

    <title>User</title>
</head>
<body>
    <style>
        body{
            background-image: url(./images/Hospital.jpg);
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
                        <h4>User Details
                            <a href="user-create.php" class="btn btn-primary float-end">Add User</a>
                            <a href="./File/Receptionist.php" class="btn btn-danger float-end" style="position: relative; right: 10px;">Back</a>
                            </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>UserName</th>
                                    <th>UserType</th>
                                    <th>Email</th>
                                    <!-- <th>Pass</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM user";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $User)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $User['Id']; ?></td>
                                                <td><?= $User['UserName']; ?></td>
                                                <td><?= $User['UserType']; ?></td>
                                                <td><?= $User['Email']; ?></td>
                                                <td>
                                                    <a href="User-View.php?id=<?= $User['Id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="User-Edit.php?id=<?= $User['Id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="Delete_User" value="<?=$User['Id'];?>" class="btn btn-danger btn-sm">Delete</button>
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