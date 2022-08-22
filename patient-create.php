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

    <title>Patient Create</title>
</head>
<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient Add 
                            <a href="mainpa.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="codep.php" method="POST">

                            <div class="mb-3">
                                <label>UserID</label>
                                <input type="text" name="UserId" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CustodianID</label>
                                <input type="text" name="CustodianId" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CustodianName</label>
                                <input type="text" name="CustodianName" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="Phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="Addres" class="form-control">
                            </div>
                            <!-- <div class="mb-3">
                                <label>ID-Image</label>
                                <input type="file" name="ImageName" class="form-control">
                            </div> -->
                            <div class="mb-3">
                                <button type="submit" name="Save" class="btn btn-primary">Save</button>
                                <a href="./uplodeID.php" class="btn btn-danger float-end" style="position: relative; left: 10px;">UplodeID</a>
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