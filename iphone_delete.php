<?php
	include "connection.php";
	$id=$_GET["id"];
	mysqli_query($link, "delete from iphone where id=$id");
	?>
	<script type="text/javascript">
	window.location="iphone_view.php"
	</script>
