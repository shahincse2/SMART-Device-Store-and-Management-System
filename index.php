<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Simple Text Animation</title>
		<link type="text/css" rel="stylesheet" href="text.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(function(){
			setTimeout(function(){
			$('.text-animation').removeClass('hidden');
			}, 500);
			})();
		</script>
	</head>
	<body>
		<ul class="text-animation hidden">
			<li>W</li>
			<li>E</li>
			<li>L</li>
			<li>C</li>
			<li>O</li>
			<li>M</li>
			<li>E</li><br/>
			
			<li>T</li>
			<li>O</li><br/>
			
			<li>S</li>
			<li>M</li>
			<li>A</li>
			<li>R</li>
			<li>T</li>
			<li> </li>
			<li>D</li>
			<li>E</li>
			<li>V</li>
			<li>I</li>
			<li>C</li>
			<li>E</li>
			<li> </li>
			<li>S</li>
			<li>T</li>
			<li>O</li>
			<li>R</li>
			<li>E</li><br/>
			
			<li>A</li>
			<li>N</li>
			<li>D</li><br/>
			
			<li>M</li>
			<li>A</li>
			<li>N</li>
			<li>A</li>
			<li>G</li>
			<li>E</li>
			<li>M</li>
			<li>E</li>
			<li>N</li>
			<li>T</li>
			<li> </li>
			<li>S</li>
			<li>Y</li>
			<li>S</li>
			<li>T</li>
			<li>E</li>
			<li>M</li>
		</ul>
		<div class="Button position-relative">
		<a href="home.php" class="btn btn1">Admin</a>
		<a href="user_all_view.php" class="btn btn1">User</a>
		</div>
	</body>
</html>