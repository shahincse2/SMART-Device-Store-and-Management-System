<?php
	include "connection.php";
	$id=$_GET["id"];
	mysqli_query($link, "delete from airpods where id=$id");
?>

	<script type="text/javascript">
		window.location="airpods_view.php"
	</script>