<?php
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>OPTIONS</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>OPTIONS</h2></center>
		<form action="register.php" method="post">
			<div class="inner_container">
				
				<a href="types/micro.php"><button type="button" class="back_btn">MICRO</button></a>
				<a href="types/mini.php"><button type="button" class="back_btn">MINI</button></a><br>
				<a href="types/prime.php"><button type="button" class="back_btn">PRIME</button></a>
				<a href="types/outstation.php"><button type="button" class="back_btn">OUTSTATION</button></a><br>
				
			</div>
		</form>
	</div>
</body>
</html>