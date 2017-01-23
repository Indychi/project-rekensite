<!DOCTYPE html>
<html>
	<head>
		<title>Rekenen</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<?php
			session_start();
			$_SESSION['hoeveel'] = array("1");
			setcookie('feedback', '0');
		?>
	</head>
	<body>
		<div id="som_area">
			<div id="sommen">
				<p>
					<?php
						require('../PHP/Rekensommen.php');
						echo $info[0] . $info[2] . $info[1];
						
						if( isset( $_SESSION['counter'])) 
						{
							$_SESSION['counter'] += 1;
						}
						else 
						{
							$_SESSION['counter'] = 1;
						}
					?>
				</p>
			</div>
			<div id="Progress">
				<div id="label">
					<?php
						$number = count($_SESSION['hoeveel']) - 1;
						echo $_SESSION['hoeveel'][$number] . " van de 20";
					?>
				</div>
				<div id="Bar"></div>
			</div>
			<div id="Input_vak">
				<form action="" method="POST" id="antwoord">
					<input type="text" name="User_antwoord" placeholder="antwoord"></input>
				</form>
				<button type="submit" form="antwoord" value="Next" onkeypress="move()">Next</button>
			</div>
			<script>
				document.getElementById('foo').onkeypress = function(move){
					if (!move) move = window.event;
					var keyCode = move.keyCode || move.which;
					if (keyCode == '13'){
					  // Enter pressed
					  document.write(test);
					}
				}
				function move() {
					var elem = document.getElementById("Bar");
					var width = (<?php echo $number ?> + 1) * 5;
					var id = setInterval(frame, 10);
					function frame() {
						if (width >= 100) {
							clearInterval(id);
						} 
						else {
							width++;
							elem.style.width = width + '%';
							document.getElementById("label").innerHTML = <?php $_SESSION['hoeveel'][0] = "'1"; echo $_SESSION['hoeveel'][$number] . " van de 20'" ?>;
						}
					}
				}
			</script>
		</div>
		<div id="feedback_area"></div>
	</body>
</html>