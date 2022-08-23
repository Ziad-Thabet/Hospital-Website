<?php
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

    <title>View Doctor</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Doctor View Details 
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
                                
                                    <div class="mb-3">
                                        <label>UserID</label>
                                        <p class="form-control">
                                            <?=$DOC['UserID'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>DepartmentType</label>
                                        <p class="form-control">
                                            <?=$DOC['DepartmentType'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Salary</label>
                                        <p class="form-control">
                                            <?=$DOC['Salary'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Rating</label>
                                        <p class="form-control">
                                            <?=$DOC['Rating'];?>
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