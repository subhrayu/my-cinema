<?php
require('connect.php');
$seats=$_POST['seats'];
$colname=$_POST['column'];
$tabname=$_POST['tablenam'];
foreach ($seats as $value){
	mysqli_query($con,"INSERT INTO $tabname($colname) VALUES ('$value');");
	//echo $value."<br>";
}
?>