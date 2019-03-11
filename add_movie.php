<?php
if(isset($_POST['movie'])){
	require('connect.php');
	$movie=$_POST['movie'];
	$sql=mysqli_query($con, "INSERT INTO movies(moviename) VALUES ('$movie');");
	if($sql){
		echo "<script>alert ('new movie added successfully');</script>";
	}
}
?>
<html>
	<head>
		<title>Add a movie</title>
	</head>
	<body>
		<form method="post" action="">
			<input type="text" name="movie">
			<input type="submit">
		</form>
	</body>
</html>