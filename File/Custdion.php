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
<div class="hh">
<a  href="logout.php">Logout</a>
</div>`
</body>
</html>

<?php 
}else{
header("Location: index.php");
exit();
}

?>