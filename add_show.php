<?php
require('connect.php');

$sql=mysqli_query($con,"SELECT thname FROM theater");
$sql1=mysqli_query($con,"SELECT moviename FROM movies");

if(isset($_POST['theater']) && isset($_POST['movie']) && isset($_POST['date']) && isset($_POST['time_h']) && isset($_POST['time_m']) && isset($_POST['time_ampm']) && isset($_POST['price'])){
//if all the fields are set
	$theater=$_POST['theater'];
	$movie=$_POST['movie'];
	$date=$_POST['date'];
	$time_h=$_POST['time_h'];
	$time_m=$_POST['time_m'];
	$time_ampm=$_POST['time_ampm'];
	$price=$_POST['price'];
//prepare data
	if($time_ampm=="AM" && $time_h=="12"){
		$time_h="00";
	}
	if($time_ampm=="PM" && $time_h!="12"){
		$time_h=$time_h+12;
	}
	$time=$time_h.$time_m;
	$intgtime=$date."_".$time_h.$time_m;
	
//insert into shows table
	$insertsql=mysqli_query($con,"INSERT INTO show_details(moviename,theater,date,showtime,price) VALUES ('$movie','$theater','$date','$time','$price')");
	
include('table_details.php');
	
	$insert2sql=mysqli_query($con, "ALTER TABLE $tablename ADD $intgtime varchar(10)");
}
?>
<html>
	<form align="center" method="post" action="">
	<select name="theater" required>
	<option value="" selected disabled>Select Theater</option>
	<?php
	while($th=mysqli_fetch_array($sql)){
		echo "<option>".$th['thname']."</option>";
	}
	?>
	</select>
	<select name="movie" required>
	<option value="" selected disabled>Select Movie</option>
	<?php
	while($mov=mysqli_fetch_array($sql1)){
		echo "<option>".$mov['moviename']."</option>";
	}
	?>
	</select>
	<br /><br />
	<select name="date" required>
		<option value="" disabled="disabled" selected="selected">
			Date</option>
		<option>
			<?php date_default_timezone_set("Asia/Calcutta"); echo date("dMY",time());?>
		</option>
		<option>
			<?php date_default_timezone_set("Asia/Calcutta"); $datetime = new DateTime('today + 1day');echo $datetime->format('dMY');?>
		</option>
		<option>
			<?php date_default_timezone_set("Asia/Calcutta"); $datetime = new DateTime('today + 2day');echo $datetime->format('dMY');?>
		</option>
		<option>
			<?php date_default_timezone_set("Asia/Calcutta"); $datetime = new DateTime('today + 3day');echo $datetime->format('dMY');?>
		</option>
		<option>
			<?php date_default_timezone_set("Asia/Calcutta"); $datetime = new DateTime('today + 4day');echo $datetime->format('dMY');?>
		</option>
		<option>
			<?php date_default_timezone_set("Asia/Calcutta"); $datetime = new DateTime('today + 5day');echo $datetime->format('dMY');?>
		</option>
		<option>
			<?php date_default_timezone_set("Asia/Calcutta"); $datetime = new DateTime('today + 6day');echo $datetime->format('dMY');?>
		</option>
	</select>
	<select name="time_h" required>
		<option value="" selected disabled>Hour</option>
		<?php
		for ($i=1; $i<=12; $i++){
			echo "<option>";
			if($i<10){
				echo "0";
			}
			echo $i."</option>";
		}
		?>
	</select>
	<select name="time_m" required>
		<option value="" selected disabled>Minute</option>
		<?php
		for ($i=0; $i<=55; $i+=5){
			echo "<option>";
			if($i<10){
				echo "0";
			}
			echo $i."</option>";
		}
		?>
	</select>
	<select name="time_ampm" required>
		<option value="" selected disabled>AM/PM</option>
		<option>AM</option>
		<option>PM</option>
	</select>
	<br /><br />
	Price:<input type="number" name="price" required>
	<br /><br />
	<input type="submit">
	<input type="reset">
	</form>
</html>