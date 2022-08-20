<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- Bootstrap core CSS -->
        <link rel="icon" href="images/favicon.png"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">  
        <!-- Custom styles for this template -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="content">
        <header>
            <div class="logo text-center">
                <h2>Login</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6 width-100">
                    <form action="login.php" method="post">
                        <div class="loginpage">
                            <input class="form-control placeholder-fix" type="email" placeholder="Email" name="email">
                            <input class="form-control placeholder-fix" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="action-button">
                            <button class="btn-block" type="submit">Login</button> 
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="row">
                <ul class="page-links">
                    <li><a href="#">Forgot Password?</a></li>
                    <li><a href="#">Sign Up</a></li>
                </ul>
                <div class="social-button">
                    <a href="#"><img src="images/facebook.png" alt="fb">Facebook</a>
                    <a href="#"><img src="images/google.png" alt="google">Google</a>
                </div>
            </div> -->
        </div>
    </body>

</html>