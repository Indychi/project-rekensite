<!DOCTYPE html>
<html>
	<head>
		<title>Rekenen</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<script src="../../../Jquery.js"></script>
		<?php
			session_start();
			if(isset($_GET['operator'])) {
				$_SESSION['operator'] = $_GET['operator'];
			}
			if(isset($_GET['niveau'])) {
				$_SESSION['niveau'] = $_GET['niveau'];
			}
			if(isset($_GET['type'])) {
				$_SESSION['type'] = $_GET['type'];
			}
			$_SESSION['hoeveel'] = 1;
			setcookie('feedback', '0');
		?>
	</head>
	<body>
		<div id="som_area">
			<div id="sommen">
				<p>
					<?php
						if(isset($_SESSION['antwoord'])) {
							
						}
						else {
							$_SESSION['antwoord'] =  array();
							$_SESSION['antwoord'] = $_GET;
						}
						require('../PHP/Rekensommen.php');
						echo $info[0] . $info[2] . $info[1];
						$_SESSION['counter']=0;
						
						if( isset( $_SESSION['counter'])) 
						{
							$_SESSION['counter']++;
							if($_SESSION['counter'] == 20)
							{
								echo 'Je bent klaar met de opdrachten' . '<a href="HTML.php">'.'klik hier ' . '</a>' . 'om terug te gaan.';
							}
						}
						else 
						{
							$_SESSION['counter'] = 1;
						}
						if($_SESSION['counter']  > 20) {
							unset($_SESSION['counter']);
						}
					?>
				</p>
			</div>
			<div id="Progress">
				<div id="label">
					<?php
						$number = count($_SESSION['hoeveel']) - 1;
						echo $_SESSION['hoeveel'] . " van de 20";
					?>
				</div>
				<div id="Bar"></div>
			</div>
			<div id="Input_vak">
				<form action="?<?php echo 'operator=' . $_SESSION['operator'] . '&type=' . $_SESSION['type'] . '&niveau=' . $_SESSION['niveau'] ?>" method="POST" id="antwoord" onsubmit="return true">
					<input type="text" name="User_antwoord" placeholder="antwoord" onkeypress="move"></input>
				</form>
				<button type="submit" form="antwoord" value="Next" onkeypress="move()">Next</button>
			</div>
			<script>
				document.getElementById('Input_vak').onkeypress = function(e){
					if (!e) e = window.event;
					var keyCode = e.keyCode || e.which;
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
							while (width != (<?php $test = count($_SESSION['antwoord'])+1; echo $test ?> * 5)){
								width++;
							}
							elem.style.width = width + '%';
							document.getElementById("label").innerHTML = <?php $_SESSION['hoeveel'][0] = "'1"; echo $_SESSION['hoeveel'][$number] . " van de 20'" ?>;
						}
					}
				}
			</script>
		</div>
		<div id="feedback_area"><?php print_r($_SESSION) ?></div>
	</body>
</html>