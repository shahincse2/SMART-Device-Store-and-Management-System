<?php
	include "connection.php";
	$id=$_GET["id"];

	$model="";
	$company="";
	$price="";
	$connection_type="";
	$connector="";
	$weight="";
	$talk_time="";
	
	
	$res = mysqli_query($link, "select * from airpods where id=$id");
	while ($row=mysqli_fetch_array($res))
	{
		$model=$row["model"];
		$company=$row["company"];
		$price=$row["price"];
		$connection_type=$row["connection_type"];
		$connector=$row["connector"];
		$weight=$row["weight"];
		$talk_time=$row["talk_time"];
	}
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
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
	</head>
	
	<body>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-5">
					<h2>Update Your Airpods Details...</h2>
					<form action="" name="form1" method="post">
					
						<div class="form-group">
							<label for="model">Model:</label>
							<input type="text" class="form-control" id="model" placeholder="Enter firstname" name="model" value= "<?php echo $model; ?>">
						</div>
						
						<div class="form-group">
							<label for="company">Company Name:</label>
							<input type="text" class="form-control" id="company" placeholder="Enter company" name="company" value= "<?php echo $company; ?>">
						</div>
						
						<div class="form-group">
							<label for="price">Price:</label>
							<input type="int" class="form-control" id="price" placeholder="Enter price" name="price" value= "<?php echo $price; ?>">
						</div>

						<div class="form-group">
							<label for="connection_type">Connection_type:</label>
							<input type="text" class="form-control" id="connection_type" placeholder="Enter connection_type" name="connection_type" value= "<?php echo $connection_type; ?>">
						</div>
						
						
						<div class="form-group">
							<label for="connector">Connector:</label>
							<input type="text" class="form-control" id="connector" placeholder="Enter connector" name="connector" value= "<?php echo $connector; ?>">
						</div>
						
						<div class="form-group">
							<label for="weight">Weight:</label>
							<input type="text" class="form-control" id="weight" placeholder="Enter weight" name="weight" value= "<?php echo $weight; ?>">
						</div>

						<div class="form-group">
							<label for="talk_time">Talk_Time:</label>
							<input type="text" class="form-control" id="talk_time" placeholder="Enter talk_time" name="talk_time" value= "<?php echo $talk_time; ?>">
						</div>
						
						<button type="submit" name="update" class="btn btn-default">Update</button>

					</form>
				</div>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	
	<?php
		if(isset($_POST["update"]))
		{
			mysqli_query($link, "update airpods set model='$_POST[model]', company='$_POST[company]', price='$_POST[price]', connection_type='$_POST[connection_type]', connector='$_POST[connector]', weight='$_POST[weight]', talk_time='$_POST[talk_time]' where id=$id");
			?>
			<script type= "text/javascript">
				alert('Successfully Updated and press OK to view.');
				window.location="airpods_view.php";
			</script>
			<?php
		}
		?>
</html>
