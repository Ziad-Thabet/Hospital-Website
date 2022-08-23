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

    <title>User Edit</title>
</head>
<body>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Edit 
                            <a href="main.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $User_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM user WHERE Id='$User_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $User = mysqli_fetch_array($query_run);

                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="User_id" value="<?= $User['Id']; ?>">

                                    <div class="mb-3">
                                        <label>UserName</label>
                                        <input type="text" name="UserName" value="<?=$User['UserName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>UserType</label>
                                        <input type="text" name="UserType" value="<?=$User['UserType'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Gender</label>
                                        <input type="text" name="Gender" value="<?=$User['Gender'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="Email" value="<?=$User['Email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password" name="Pass" value="<?=$User['Pass'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="Update_User" class="btn btn-primary">
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