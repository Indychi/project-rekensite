<!DOCTYPE html>
<html>
	<head>
		<title>Rekenen</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<?php
			session_start();
			$_SESSION['hoeveel'] = array(1);
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
						
						if( isset( $_SESSION['counter'] ) ) 
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
						$number = count($_SESSION['hoeveel']);
						echo $_SESSION['hoeveel'][$number] . " van de 20";
					?>
				</div>
				<div id="Bar"></div>
			</div>
			<div id="Input_vak">
				<form action="" method="POST" id="antwoord">
					<input type="text" name="User_antwoord" placeholder="antwoord"></input>
				</form>
				<button type="submit" form="antwoord" value="Next" onclick="move()">Next</button>
			</div>
			<script>
				function move() {
				  var elem = document.getElementById("Bar");   
				  var width = 5;
				  var id = setInterval(frame, 10);
				  function frame() {
					  width + 5; 
					  elem.style.width = width + '%'; 
					  document.getElementById("label").innerHTML = width * 1  + '%';
					}
				  }
				}
			  }
			}
		</script>	

			</script>
		</div>
	</body>
</html>