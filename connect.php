<?php
$con=mysqli_connect("localhost","root","");
if($con){
	$db=mysqli_select_db($con,"mycinema");
}else{
	echo "couldn't connect";
}
if($db){
}else{
	echo "couldn't connect to database";
}
?>