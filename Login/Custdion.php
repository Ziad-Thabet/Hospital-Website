<?php 
session_start();

if (isset($_SESSION['UserType'])) {

?>
<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<link rel="stylesheet" type="text/css" href="../css/styleLogin.css">
</head>
<body>
<h1>Hello, <?php echo $_SESSION['UserType']; ?></h1>
<a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
header("Location: index.php");
exit();
}

?>