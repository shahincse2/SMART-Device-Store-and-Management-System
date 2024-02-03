<?php
	$link=mysqli_connect("localhost","root","") or die (mysqli_error($link));
	mysqli_select_db($link, "apple_store") or die (mysqli_error($link));
?>