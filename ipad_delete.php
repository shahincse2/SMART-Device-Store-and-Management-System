<?php
	include "connection.php";
	$id=$_GET["id"];
	mysqli_query($link, "delete from ipad where id=$id");
	?>
	
	<script type="text/javascript">
		window.location="ipad_view.php"
	</script>