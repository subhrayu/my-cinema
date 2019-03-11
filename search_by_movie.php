<?php
require('connect.php');
$sql=mysqli_query($con,"SELECT moviename FROM movies");
?>

<html>
<form action="book_a_show.php" method="get">
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
	<select name="movie" required>
		<option value="" selected disabled>Select Movie</option>
		<?php
		while($mov=mysqli_fetch_array($sql)){
			echo "<option>".$mov['moviename']."</option>";
		}
		?>
	</select>
	<input type="submit" value="Find Shows">
</form>
</html>