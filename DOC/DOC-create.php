<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Doctor Create</title>
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

        <?php include('./message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Doctor Add 
                            <a href="mainD.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="codeD.php" method="POST">

                            <div class="mb-3">
                                <label>UserID</label>
                                <input type="text" name="UserID" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DepartmentType</label>
                                <input type="text" name="DepartmentType" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Salary</label>
                                <input type="text" name="Salary" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Rating</label>
                                <input type="number" name="Rating" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="Save" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>