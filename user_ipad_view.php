<?php
	include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>User View Pannel</title>
	  
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
  <li><a href=".php">iPhone</a></li>
  <li><a href=".php">iPad</a></li>
  <li><a href=".php">iMac</a></li>
  <li><a href=".php">Watch</a></li>
  <li><a href=".php">Airpods</a></li>
  
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
                        <h4>You Can Search By Any ios Model</h4>
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

                                        $query = "SELECT * FROM ipad WHERE model='$stud_id' ";
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
												echo "</tr><tr><td>model</td>";
												echo "<td>"; echo $row["model"]; echo"</td>";
												echo "</tr>";
												
												echo "<tr><td>Company Name</td>";
												echo "<td>"; echo $row["company"]; echo"</td>";
												echo "</tr>";
												
												echo "<tr><td>Price</td>";
												
												
												echo "<td>"; echo $row["price"]; echo"</td>";
												
												echo "</tr>";
												
												echo "<tr><td>Size</td>";
												echo "<td>"; echo $row["size"]; echo "</td>";
												
												echo "</tr>";
												
												echo "<tr><td>Camera</td>";
												echo "<td>"; echo $row["camera"]; echo "</td>";
												
												echo "</tr>";
												
												echo "<tr><td>Storage</td>";
												echo "<td>"; echo $row["storage"]; echo "</td>";

											
												echo "</tr>";
												
												/* echo "<tr>";
												echo "<td>"; ?> <a href="ipad_edit.php?id=<?php echo $row["id"];?>"><buttion type="buttion" class="btn btn-success">Edit</buttion></a> <?php echo"</td>";
												
												echo "<td>"; ?> <a href="ipad_delete.php?id=<?php echo $row["id"];?>"><buttion type="buttion" class="btn btn-danger">Delete</buttion></a> <?php echo"</td>";
												
												echo "</tr>";
                                                 */
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