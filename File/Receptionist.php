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
        <a href="../main.php">
        <button class="btn-one">User</button>
        </a>
        <a href="../mainpa.php">
        <button class="btn-one">Information-About-Patient</button>
        </a>
        <a href="../DOC/mainD.php">
        <button class="btn-one">Information-About-Doctor</button>
        </a>
        <!-- <a href="../uplodeID.php">
        <button class="btn-one">Uplode-ID</button>
        </a>
        <a href="">
        <button class="btn-one"></button>
        </a>
        <a href="">
        <button class="btn-one"></button>
        </a>
        <a href="">
        <button class="btn-one"></button>
        </a>
        <a href="">
        <button class="btn-one"></button>
        </a>
        <a href="">
        <button class="btn-one"></button>
        </a>
        <a href="">
        <button class="btn-one"></button>
        </a> -->
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