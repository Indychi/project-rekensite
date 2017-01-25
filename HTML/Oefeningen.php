<!DOCTYPE html>
<html>
	<head>
		<title>Rekenen</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
		
			if(isset($_POST['User_antwoord'])) {
				$_SESSION['antwoord'][] = $_POST['User_antwoord'];
				$vragen = count($_SESSION['antwoord']);
				$progress_width = 900/20;
				$progress = ($vragen)* $progress_width;
				echo $vragen;
				if($vragen == 20) {
					$vragen = count($_SESSION['antwoord']);	
				}
				require('../PHP/feedback.php');
				
				if ($vragen == 20) 
				{
					header("location: Resultaten.php");
				}
			}
			else {
				$_SESSION['important'] = $_GET;
			}
			require('../PHP/Rekensommen.php');
			$_SESSION['counter']=0;
						
			if($_SESSION['counter']  > 20) 
			{
				unset($_SESSION['counter']);
			}
			//session_destroy();
		?>
	<script>
		$(document).ready(function(){
			$(document).ready(function(){
				$("#test").animate({width: '<?php echo $progress ?>px'});
			});
		});
	</script>
	</head>
	<body>
		<div id="container">
			<div id="som_area">
				<div id="sommen">
					<p>
						<?php
							echo $info[0] . $info[2] . $info[1];
						?>
					</p>
				</div>
				<div id="progress_container">
					<div id="test" ></div>
				</div>
				<div id="Input_vak">
					<form action="?" method="POST" id="antwoord" >
						<input type="number" name="User_antwoord" placeholder="antwoord" required ></input>
					</form>
					<button type="submit" form="antwoord" value="Next" onkeypress="myMove()">Next</button>
				</div>
			</div>
			<div id="feedback_area"><?php print_r($_SESSION) ?></div>
		</div>
	</body>
</html>