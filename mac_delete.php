<?php
	include "connection.php";
	$id=$_GET["id"];
	mysqli_query($link, "delete from mac where id=$id");
	?>
	<script type="text/javascript">
	window.location="mac_view.php"
	</script>
