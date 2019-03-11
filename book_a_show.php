<?php
require('connect.php');
if(isset($_GET['date']) && isset($_GET['movie'])){
	$date=$_GET['date'];
	$movie=$_GET['movie'];
$sql=mysqli_query($con, "SELECT theater,showtime,price FROM show_details WHERE date='$date' AND moviename='$movie' ORDER BY theater, showtime;");
}
?>

<html>
	<body>
		<?php
		if(isset($_GET['date']) && isset($_GET['movie'])){	
			if(mysqli_num_rows($sql)<1){
				echo "so shows found on this date";
			}else{
			echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Theater</th>";
				echo "<th>Showtime</th>";
				echo "<th>Price</th>";
				echo "<th></th>";
				echo "</tr>";
			while($r=mysqli_fetch_array($sql)){
				echo "<tr>";
				//declareing variables
				$theater=$r['theater'];
				$showtime=$r['showtime'];
				$price=$r['price'];
				//echoing table
				echo "<td>$theater</td>";
				//manipulating showtime
				$shtime=$r['showtime'];
				$shtime=$shtime[0].$shtime[1].":".$shtime[2].$shtime[3];
				echo "<td>$shtime</td>";
				echo "<td>Rs$price</td>";
				echo "<td><a href='booking.php?date=$date&movie=$movie&theater=$theater&shtime=$showtime&price=$price'>book</a></td>";
				echo "</tr>";
			}
			echo "</table>";
			}
		}else{
			echo "please try again<script>window.location.href='search_by_movie.php';</script>";
		}
		?>
	</body>
</html>