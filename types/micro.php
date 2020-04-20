<?php
	require_once('../config.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>MICRO CARS</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>MICRO CARS</h2></center>
		<form action="micro.php" method="post">
		
			<div class="inner_container">
				<img src="../imgs/nano.jpg">
				<button class="book_button" name="book" type="submit">BOOK NANO</button><br><br>
				<img src="../imgs/wagonr.jpg">
				<button class="book_button" name="book" type="submit">BOOK WAGON R</button><br><br>
				<img src="../imgs/santro.jpg">
				<button class="book_button" name="book" type="submit">BOOK SANTRO</button><br><br>
				
				
			</div>
		</form>
		
		<?php
		session_start();
			if(isset($_POST['book']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				
				$query = "select name from table1 where uname = '$username' and password = '$password' ";
			
				$query_run = mysqli_query($con,$query);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					while ($row = mysqli_fetch_array($query_run)) {
						//echo $row["name"];
						$_SESSION['name'] = $row["name"];
						header( "Location: homepage.php");
					}
					
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
		?>
		
	</div>
</body>
</html>