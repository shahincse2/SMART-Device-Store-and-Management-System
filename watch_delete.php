<?php
	include "connection.php";
	$id=$_GET["id"];
	mysqli_query($link, "delete from watch where id=$id");
?>

	<script type="text/javascript">
		window.location="watch_view.php"
	</script>