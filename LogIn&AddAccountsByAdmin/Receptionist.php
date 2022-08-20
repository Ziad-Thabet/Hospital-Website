<?php 
session_start();

if (isset($_SESSION['Id']) && isset($_SESSION['UserType'])) {

?>
<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<link rel="stylesheet" type="text/css" href="../css/styleLogin.css">
</head>
<body>
<div class="header">
    <div class="btn">
        <a href="#first-page">
        <button class="btn-one">Home</button>
        </a>
        <a href="#second-page">
        <button class="btn-one">Music</button>
        </a>
        <a href="#third-page">
        <button class="btn-one">About</button>
        </a>
        <a href="./Registration.php">
        <button class="btn-one">Add-User</button>
        </a>
    </div>

    </div>
    <div class="hh">
<h1>Hello, <?php echo $_SESSION['UserType']; ?></h1>
<a  href="logout.php">Logout</a>
<!-- <a href="./Registration.php">Add User</a> -->
</div>
</body>
</html>

<?php 
}else{
header("Location: index.php");
exit();
}
?>