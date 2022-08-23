<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../css/styleREG.css">
	</head>

	<body>
		<div class="wrapper" style="background-image: url('../images/Hospital.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="../images/Med.jpg" alt="">
				</div>
				<form action="insert.php" method="POST">
				<?php if(isset($_GET['error'])){ ?>
				<div class="alert alert-danger" role="alert">
				<?php echo $_GET['error']; ?>
				</div>
				<?php } ?>

				<?php if(isset($_GET['success'])){ ?>
				<div class="alert alert-success" role="alert">
				<?php echo $_GET['success']; ?>
				</div>
				<?php } ?>
					<h3>Registration Form</h3>
					<div class="form-wrapper">
						<input type="text" placeholder="UserName" name="UserName" class="form-control" >
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="UserType" name="UserType" class="form-control" >
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Gender" name="Gender" class="form-control" >
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="email" placeholder="Email Address" name="Email" class="form-control" >
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" name="Pass" class="form-control" >
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button type="submit" name="submit" value="Register">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>