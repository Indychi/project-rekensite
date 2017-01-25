<!DOCTYPE html>
<html>
	<head>
		<title>Rekensite</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<?php 
		session_start();
		?>
	</head>
	<body>
		<?php
		if (isset ($_POST['verzend']))
		{
			$_SESSION['naam']=$_POST['naam'];
		}
		else
		{
		?>
		<form action="HTML.php" method="POST">
			<input type="text" placeholder="naam" name="naam" required></input>
			<input type="submit" name="verzend" value="volgende"></input>
		</form>
		<?php
			}
		?>
	</body>
</html>