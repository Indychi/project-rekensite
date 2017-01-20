<!DOCTYPE html>
<html>
	<head>
		<title>Rekenen</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<?php
			setcookie('feedback', '0');
		?>
	</head>
	<body>
<<<<<<< HEAD
		<div id="som_area">
			<div id="sommen">
				<p>
<?php
	include('../PHP/Rekensommen.php');
	echo $info[0] . $info[2] . $info[1];
?>
				</p>
			</div>
		</div>
		<div id="progress">
			<div id="Bar">
				<div id="label">
					<?php
						$hoeveel_antwoorden = count($_SESSION['antwoord']);
						echo $hoeveel_antwoorden;
					?>
				</div>
			</div>		
		</div>
		<div id="Input_vak"
			<form action="" method="POST" id="antwoord">
				<input type="text" name="User_antwoord" placeholder="antwoord"></input>
			</form>
			<button type="submit" form="antwoord" value="Next" onclick="move()"></button>
		</div>
		<script>
			function move() {
			  var elem = document.getElementById("Bar");   
			  var width = 10;
			  var id = setInterval(frame, 10);
			  function frame() {
				if (width >= 100) {
				  clearInterval(id);
				} else {
				  width++; 
				  elem.style.width = width + '%'; 
				  document.getElementById("label").innerHTML = width * 1  + '%';
				}
			  }
			}
		</script>
=======
		<p>
<?php
	include('../PHP/fucties.php');
	include('../PHP/Rekensommen.php');
	echo $info[0] . $info[2] . $info[1];
?>
		</p>	
>>>>>>> refs/remotes/origin/master
	</body>
</html>