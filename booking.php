<style>
input[type=checkbox] {
display:none;
}
 
input[type=checkbox] + label
{
background: url("seat.png") no-repeat;
background-size: 100%;
height: 15px;
width: 15px;
display:inline-block;
padding: 0 0 0 0px;
}

input[type=checkbox]:checked + label
{
background: url("blue.png") no-repeat;
background-size: 100%;
height: 15px;
width: 15px;
display:inline-block;
padding: 0 0 0 0px;
}

input[type=checkbox]:disabled + label
{
background: url("red.png") no-repeat;
background-size: 100%;
height: 15px;
width: 15px;
display:inline-block;
padding: 0 0 0 0px;
}
</style>
<?php
require('connect.php');

if(isset($_GET['date']) && isset($_GET['movie']) && isset($_GET['theater']) && isset($_GET['shtime']) && isset($_GET['price'])){
	//variable declaration
	$date=$_GET['date'];
	$movie=$_GET['movie'];
	$theater=$_GET['theater'];
	$shtime=$_GET['shtime'];
	$price=$_GET['price'];
	$colname=$date."_".$shtime;
	include('table_details.php');
	
	//booking UI
	$sql=mysqli_query($con, "SELECT rows,columns FROM theater WHERE thname='$theater';");
	$result=mysqli_fetch_array($sql);

	$sql1=mysqli_query($con, "SELECT $colname FROM $tablename;");
	$booked=array();
	while($m=mysqli_fetch_row($sql1)){
		array_push($booked,$m[0]);
	}
	$row=$result['rows'];
	$column=$result['columns'];
	echo "<form method='post' action='booking_process.php'>";
	echo "<table align='center'>";
	for($r=1; $r<=$row; $r++){
		echo "<tr>";
		for ($c=1; $c<=$column; $c++){
			$seatno="$r+$c";
			echo "<td>";
			echo "<input type='checkbox' name='seats[]' id='$seatno'";
			if(in_array("$seatno", $booked)){
				echo "disabled checked";
			}else{
				echo "value='$seatno'";
			}
			echo "><label for='$seatno'></label>";
			echo "</td>";
			
		}
		echo "</tr>";
	}
	echo "	<tr>
				<th colspan='$column'>
					<br /><h2>SCREEN</h2>
				</th>
			</tr>";
	$halfcol=$column/2;
	echo "	<tr>
			<td colspan='$halfcol' align='left'><input type='reset'></td>
			<td colspan='$halfcol' align='right'><input type='submit' value='proceed'></td>
			</tr>";
	echo "</table>";
	echo "<input type='hidden' name='column' value='$colname'>";
	echo "<input type='hidden' name='tablenam' value='$tablename'>";
	echo "</form>";
}else{
	echo "Please try again <script>window.location.href='search_by_movie.php';</script>";
}
?>