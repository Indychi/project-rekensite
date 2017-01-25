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
<<<<<<< HEAD
			
=======
			setcookie('feedback', '0');
		
			if(isset($_POST['User_antwoord'])) {
				$_SESSION['antwoord'][] = $_POST['User_antwoord'];
				$vragen = count($_SESSION['antwoord']);
				$progress_width = 900/20;
				$progress = ($vragen)* $progress_width;
				echo $vragen;
				if($vragen == 20) {
					$vragen = count($_SESSION['antwoord']);	
					header("location: Resultaten.php");
				}
				require('../PHP/feedback.php');
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
>>>>>>> 5a7a7d532e2c951d997c7ea4bcdbe4a31bccaac1
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
<<<<<<< HEAD
		<div id="som_area">
			<div id="sommen">
				<p>
					<?php
						if(isset($_POST['User_antwoord'])) {
							$_SESSION['antwoord'][] = $_POST['User_antwoord'];
							$vragen = count($_SESSION['antwoord']);
							$progress = ($vragen + 1)*4.6;
							echo $vragen;
							
							if($vragen == 20) 
							{
								$vragen = count($_SESSION['antwoord']);
							}
								
							
								if ($vragen == 20) 
								{
									header("location: Resultaten.php");
								}
							
							}
						else {
							$_SESSION['important'] = $_GET;
						}
						require('../PHP/Rekensommen.php');
						echo $_SESSION['info'][0] . $_SESSION['info'][2] . $_SESSION['info'][1];
						//include_once('../PHP/functies.php');
						Feedback();
						$_SESSION['counter']=0;
						$_SESSION['fout']=0;
						$Opdr_Totaal= $_SESSION['counter'] + $_SESSION['fout'];
						
						if($Opdr_Totaal/*$_SESSION['counter']*/  >= 20) 
						{
							unset($_SESSION['counter']);
							unset($_SESSION['fout']);
							
						}
					?>
				</p>
=======
		<div id="container">
			<div id="som_area">
				<div id="sommen">
					<p>
						<?php
							echo $info[0] . $info[2] . $info[1];
						?>
					</p>
				</div>
			</div>
			<div id="progress_container">
				<div id="test" ></div>
>>>>>>> 5a7a7d532e2c951d997c7ea4bcdbe4a31bccaac1
			</div>
			<div id="Input_vak">
				<form action="?" method="POST" id="antwoord" >
					<input type="number" name="User_antwoord" placeholder="antwoord" required ></input>
				</form>
<<<<<<< HEAD
				<button type="submit" form="antwoord" name="Next" value="Next" onkeypress="move()">Next</button>
			</div>
		</div>
		<div id="feedback_area"><?php print_r($_SESSION); echo "<br />"; print_r($_POST);?></div>
=======
				<button type="submit" form="antwoord" value="Next" onkeypress="myMove()">Next</button>
			</div>
		<div id="feedback_area"><?php print_r($_SESSION) ?></div>
>>>>>>> 5a7a7d532e2c951d997c7ea4bcdbe4a31bccaac1
	</body>
</html>