<?php
	include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Smart Device Store and Management System</title>
	  
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="iphone.php">iPhone</a></li>
  <li><a href="ipad.php">iPad</a></li>
  <li><a href="mac.php">iMac</a></li>
  <li><a href="watch.php">Watch</a></li>
  <li><a href="airpods.php">Airpods</a></li>
  
  <li><a href="#about">About</a></li>
</ul>
	  
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
	</head>
	
	<body>
		<h1 style="text_align:center">Here your all data</h1>
		
		<a href="airpods.php"> 
			<button type="submit" name="insert" class="btn btn-primary">Add New</button>
		</a>
		
		<a href="admin_airpods_search.php"> 
			<button  class="btn btn-primary">Search</button>
		</a>
		<div class="col-lg-12">
			<table class="table table-bordered">
				<thead>
				  <tr>
				  	<th>ID</th>
					<th>Model</th>
					<th>Company Name</th>
					<th>Price</th>
					<th>Connection Type</th>
					<th>Connector</th>
					<th>Weight </th>
					<th>talk_time </th>
				  </tr>
				</thead>

				<tbody>
					<?php
						$res=mysqli_query($link, "select * from airpods");
						while ($row=mysqli_fetch_array($res))
						{
							echo "<tr>";
							echo "<td>"; echo $row["id"]; echo"</td>";
							echo "<td>"; echo $row["model"]; echo"</td>";
							echo "<td>"; echo $row["company"]; echo"</td>";
							echo "<td>"; echo $row["price"]; echo"</td>";
							echo "<td>"; echo $row["connection_type"]; echo"</td>";
							echo "<td>"; echo $row["connector"]; echo "</td>";
							echo "<td>"; echo $row["weight"]; echo "</td>";
							echo "<td>"; echo $row["talk_time"]; echo "</td>";

							echo "<td>"; ?> <a href="airpods_edit.php?id=<?php echo $row["id"];?>"><buttion type="buttion" class="btn btn-success">Edit</buttion></a> <?php echo"</td>";
							
							echo "<td>"; ?> <a href="airpods_delete.php?id=<?php echo $row["id"];?>"><buttion type="buttion" class="btn btn-danger">Delete</buttion></a> <?php echo"</td>";
							
							echo "</tr>";
						}
					?>
				</tbody>
			 </table>
			 
								<a href="airpods.php" class btn btn-primary">Back</a>
		</div>

	</body>
	<?php

		if(isset($_POST["delete"]))
		{
			mysqli_query($link, "delete from airpods where model='$_POST[model]'") or die (mysqli_error($link));
			
			?>
		
			<script type= "text/javascrip">
				window.location.href=window.location.href;
			</script>
			<?php
		}
		
		if(isset($_POST["update"]))
		{
			mysqli_query($link, "update airpods set model='$_POST[company]' where model='$_POST[model]'") or die (mysqli_error($link));
			
			?>
		
			<script type= "text/javascrip">
				window.location.href=window.location.href;
			</script>
			<?php
		}
	?>
</html>
