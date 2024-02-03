<?php
	include "connection.php";
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="./logstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<?php
				if(isset($_POST['signupSuhmit'])){
				$username = $_POST[username];
				$email = $_POST[email];
				$password = $_POST[password];
				$result="INSERT INTO user(username, email, password) values('$username', '$email', '$password')";
				$query = mysqli_query($link, $result);
			}


			if(isset($_POST['login'])){
			$email = $_POST[email];
			$password = $_POST[password];
			$select = "SELECT email, password FROM user WHERE '$email' = email";
			$passwords = $link->query($select);
			$passwords->fethc_assoc();
			if($passwords['password'] == $password){
					header("Location: index.php");
				}else{
					echo "Password does't match";
				}
			}
			?>
			<div class="signup">
				<form method="post" action="" name="sigup">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="signupSuhmit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="post" action="">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit" name="login">Login</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>