<?php
session_start();
require './Connection/db_conn.php';
$msg = "";
// If upload button is clicked ...
if (isset($_POST['upload'])) {
	$PatienteID=$_POST['PatientID'];
	$Filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./images/" . $Filename;
    $PatientID = mysqli_real_escape_string($conn, $PatienteID);

	// Get all the submitted data from the form
	$sql = "INSERT INTO id (PatientID,IMG) VALUES ('$PatientID','$folder')";
	// Execute query
	mysqli_query($conn, $sql);
	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		// header("location: ./File/Receptionist.php");
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="text" name="PatientID" placeholder="Patient-ID" value="" required/>
			</div>
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" required/>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
				<a href="./patient-create.php" class="btn btn-danger float-end" style="position: relative; left: 10px;">Back</a>

			</div>
		</form>
	</div>
	<!-- <div id="display-image">
		<?php
		$query = "SELECT * from patient";
		$result = mysqli_query($conn, $query);
		while ($data = mysqli_fetch_assoc($result)) {
		?>
			<img src="./images/"?php echo $data['filename']; ?>">
		<?php
		}
		?>
	</div> -->
</body>

</html>
