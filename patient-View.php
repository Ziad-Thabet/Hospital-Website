<?php
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

    <title>UserView</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient View Details 
                            <a href="mainpa.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $User_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM patient WHERE Id='$User_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $Patient = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>UserID</label>
                                        <p class="form-control">
                                            <?=$Patient['UserId'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>CustodianId</label>
                                        <p class="form-control">
                                            <?=$Patient['CustodianId'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>CustodianName</label>
                                        <p class="form-control">
                                            <?=$Patient['CustodianName'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <p class="form-control">
                                            <?=$Patient['Phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <p class="form-control">
                                            <?=$Patient['Addres'];?>
                                        </p>
                                    </div>
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