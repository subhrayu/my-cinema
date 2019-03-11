<?php
if(isset($_POST['theater']) && isset($_POST['rows']) && isset($_POST['columns'])){
	require('connect.php');
	$theater=$_POST['theater'];
	$rows=$_POST['rows'];
	$columns=$_POST['columns'];
	$sql=mysqli_query($con, "INSERT INTO theater(thname,rows,columns) VALUES ('$theater','$rows','$columns');");
	
	//get the theater id from table theater
	$sql1=mysqli_query($con, "SELECT id FROM theater WHERE thname='$theater'");
	$thid=mysqli_fetch_array($sql1);
	
	$tablename="th".$thid['id']."_booking";
	$newtable=mysqli_query($con, "CREATE TABLE $tablename (id INT(10) AUTO_INCREMENT PRIMARY KEY)");
	
	if($sql && $newtable){
		echo "<script>alert ('new theater added successfully');</script>";
	}
}
?>
<html>
	<head>
		<title>Add a theater</title>
	</head>
	<body>
		<form method="post" action="">
			Theater name: <input type="text" name="theater"><br />
			Rows:<input type="number" name="rows"><br />
			Columns:<input type="number" name="columns"><br />
			<input type="submit">
		</form>
	</body>
</html>