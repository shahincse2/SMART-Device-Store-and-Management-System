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
  <li><a class="active" href="home.php">Home</a></li>
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
				<h2>Insert Your iMac Details...</h2>
				<form action="" name="form1" method="post">
				
					<div class="form-group">
						<label for="model">Model:<span style="color:red; font-weight:bold">*</span></label>
						<input type="text" required=" " class="form-control" id="model" placeholder="Enter Model" name="model">
					</div>
					
					<div class="form-group">
						<label for="company">Company Name:<span style="color:red; font-weight:bold">*</span></label>
						<input type="text" required=" " class="form-control" id="company" placeholder="Enter company" name="company">
					</div>
					
					<div class="form-group">
						<label for="price">Price:<span style="color:red; font-weight:bold">*</span></label>
						<input type="int" required=" " class="form-control" id="price" placeholder="Enter price" name="price">
					</div>
					
					<div class="form-group">
						<label for="size">Size:<span style="color:red; font-weight:bold">*</span></label>
						<input type="text" required=" " class="form-control" id="size" placeholder="Enter size" name="size">
					</div>
					
					<div class="form-group">
						<label for="storage">Internal Storage:<span style="color:red; font-weight:bold">*</span></label>
						<input type="text" required=" " class="form-control" id="storage" placeholder="Enter Internal Storage" name="storage">
					</div>
					
					<div class="form-group">
						<label for="gen">GEN:<span style="color:red; font-weight:bold">*</span></label>
						<input type="text" required=" " class="form-control" id="gen" placeholder="Enter generation" name="gen">
					</div>
					
					<div class="form-group">
						<label for="core">Core_i:<span style="color:red; font-weight:bold">*</span></label>
						<input type="text" required=" " class="form-control" id="core" placeholder="Enter corei" name="core">
					</div>
					
					<div class="form-group">
						<label for="processor">Processor:<span style="color:red; font-weight:bold">*</span></label>
						<input type="text" required=" " class="form-control" id="processor" placeholder="Enter processor" name="processor">
					</div>
					
					
					<button type="submit" name="insert" class="btn btn-primary">Insert</button>
					<button type="submit" name="update" class="btn btn-primary">Update</button>
					<button type="submit" name="delete" class="btn btn-danger">Delete</button>
					
					<a href="mac_view.php" class="btn btn-primary">View Data List</a>

				</form>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	<?php
		if(isset($_POST["insert"]))
		{
			mysqli_query($link, "insert into mac values (NULL, '$_POST[model]', '$_POST[company]', '$_POST[price]','$_POST[size]','$_POST[storage]','$_POST[gen]','$_POST[core]','$_POST[processor]')");
			?>
			<script type= "text/javascript">
				alert('Successfully Inserted and press OK to view.');
				window.location="mac_view.php";
			</script>
			<?php
		
		}
		
		
		
		if(isset($_POST["delete"]))
		{
			mysqli_query($link, "delete from mac where model='$_POST[model]'") or die (mysqli_error($link));
			?>
			<script type= "text/javascript">
			alert('Successfully Deleted and press OK to view.');
				window.location="mac_view.php";
			</script>
			<?php
		}
		
		if(isset($_POST["update"]))
		{
			mysqli_query($link, "update mac set model='$_POST[company]' where model='$_POST[model]'") or die (mysqli_error($link));
			?>
			<script type= "text/javascript">
				alert('Successfully Updated and press OK to view.');
				window.location="mac_view.php";
			</script>
			<?php
		}
	?>
</html>
