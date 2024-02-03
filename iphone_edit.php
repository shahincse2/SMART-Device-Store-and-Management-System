<?php
	include "connection.php";
	$id=$_GET["id"];
	
	$model="";
	$company="";
	$price="";
	$battery="";
	$ram="";
	$storage="";
	$display="";
	$camera="";
	
	$res = mysqli_query($link, "select * from iphone where id=$id");
	while ($row=mysqli_fetch_array($res))
	{
		$model=$row["model"];
		$company=$row["company"];
		$price=$row["price"];
		$battery=$row["battery"];
		$ram=$row["ram"];
		$storage=$row["storage"];
		$display=$row["display"];
		$camera=$row["camera"];
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
				<h2>Update Your iPhone Details...</h2>
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
						<label for="battery">Battery:</label>
						<input type="text" class="form-control" id="battery" placeholder="Enter battery" name="battery" value= "<?php echo $battery; ?>">
					</div>
					
					<div class="form-group">
						<label for="ram">RAM:</label>
						<input type="int" class="form-control" id="ram" placeholder="Enter RAM" name="ram" value= "<?php echo $ram; ?>">
					</div>
					
					<div class="form-group">
						<label for="storage">Internal Storage:</label>
						<input type="text" class="form-control" id="storage" placeholder="Enter Internal Storage" name="storage" value= "<?php echo $storage; ?>">
					</div>
					
					<div class="form-group">
						<label for="display">Display Size:</label>
						<input type="int" class="form-control" id="display" placeholder="Enter display size" name="display" value= "<?php echo $display; ?>">
					</div>
					
					<div class="form-group">
						<label for="camera">Camera:</label>
						<input type="text" class="form-control" id="camera" placeholder="Enter camera" name="camera" value= "<?php echo $camera; ?>">
					</div>
					
					<button type="submit" name="update" class="btn btn-default">Update</button>

				</form>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
	</body>
	
	<?php
		if(isset($_POST["update"]))
		{
			mysqli_query($link, "update iphone set model='$_POST[model]', company='$_POST[company]', price='$_POST[price]', battery='$_POST[battery]', ram='$_POST[ram]', storage='$_POST[storage]', display='$_POST[display]', camera='$_POST[camera]' where id=$id");
			?>
			<script type= "text/javascript">
				alert('Successfully Updated and press OK to view.');
				window.location="iphone_view.php";
			</script>
			<?php
		}
		?>
</html>
