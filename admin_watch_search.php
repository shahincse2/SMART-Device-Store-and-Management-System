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
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
	</head>
	
	<body>
		<div class="container">
			<div class="row justify-content-md-center">
			<div class="col-md-5">
                    <div class="card-header text-center">
                        <h4>Search and Edit or Delete Particular Product</h4>
					</div>
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="stud_id" value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","apple_store");

                                    if(isset($_GET['stud_id']))
                                    {
                                        $stud_id = $_GET['stud_id'];

                                        $query = "SELECT * FROM watch WHERE model='$stud_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
											?>
											<table class="table table-bordered">
				

				<tbody><?php
                                            foreach($query_run as $row)
                                            {
                                                
												echo "<tr><td style='width:30%'>ID</td>";
												echo "<td>"; echo $row["id"]; echo"</td>";
												
												echo "</tr><tr><td>Model</td>";
												echo "<td>"; echo $row["model"]; echo"</td>";
												echo "</tr>";
												
												echo "<tr><td>Company Name</td>";
												echo "<td>"; echo $row["company"]; echo"</td>";
												echo "</tr>";
												
												echo "<tr><td>Price</td>";
												echo "<td>"; echo $row["price"]; echo"</td>";
												echo "</tr>";

												echo "<tr><td>Connection Type</td>";
												echo "<td>"; echo $row["connection_type"]; echo "</td>";
												echo "</tr>";
												
												echo "<tr><td>Resolution</td>";
												echo "<td>"; echo $row["resolution"]; echo "</td>";
												echo "</tr>";
												
												echo "<tr><td>Weight</td>";
												echo "<td>"; echo $row["weight"]; echo "</td>";
												echo "</tr>";
												
												echo "<tr><td>Battery</td>";
												echo "<td>"; echo $row["battery"]; echo "</td>";
												echo "</tr>";

												echo "<tr><td>Operating system</td>";
												echo "<td>"; echo $row["os"]; echo "</td>";
												echo "</tr>";
												
												echo "<tr><td>Sensor</td>";
												echo "<td>"; echo $row["sensor"]; echo "</td>";
												echo "</tr>";
												
												echo "<tr>";
												echo "<td>"; ?> <a href="watch_edit.php?id=<?php echo $row["id"];?>"><buttion type="buttion" class="btn btn-success">Edit</buttion></a> <?php echo"</td>";
												
												echo "<td>"; ?> <a href="watch_delete.php?id=<?php echo $row["id"];?>"><buttion type="buttion" class="btn btn-danger">Delete</buttion></a> <?php echo"</td>";
												
												echo "</tr>";
                                                 
                                            }?>
											
				</tbody>
			 </table><?php
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>
								<a href="watch_view.php" class btn btn-primary">Back</a>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>