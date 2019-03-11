<?php
$search=mysqli_query($con,"SELECT id FROM theater WHERE thname='$theater';");
$thid=mysqli_fetch_array($search);
@$tablename="th".$thid['id']."_booking";
?>