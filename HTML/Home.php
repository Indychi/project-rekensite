<!DOCTYPE html>
<html>
	<head>
		<title>Rekensite</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<?php 
			if(isset($_SESSION)){
				session_destroy();
			}
		?>
	</head>
	<body>
		<div id="container" >
			<div id="convenience">
				<form action="Homepage.php" method="POST" id="inlogpagina" >
					<input type="text" placeholder="naam" name="naam" id="naam" required></input>
					<input type="submit" name="verzend" value="volgende" id="versturen"></input>
				</form>
			</div>
			<img src="../image/itMcsy5.gif" alt="Loading" title="Rekenen" />
		</div>
	</body>
</html>