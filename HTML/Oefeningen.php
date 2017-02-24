<!DOCTYPE html> 
<html>
	<head>
		<title>Rekenen</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.fullbg.min.js"></script>
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
			require('../PHP/Rekensommen.php');
			$_SESSION['oud_info'][] = $_SESSION['info'];
			$_SESSION['oud_antwoord'][] = $_SESSION['info'][3];
			$_SESSION['sommen'][] = $_SESSION['info'][0] . $_SESSION['info'][2] . $_SESSION['info'][1] . "=" . $_SESSION['info'][3];
			$feedback = Feedback();
			if(isset($_POST['User_antwoord'])) {
				if(isset($_SESSION['antwoord'])){
					$f = count($_SESSION['antwoord']) - 1;
				}
				$_SESSION['antwoord'][] = $_POST['User_antwoord'];
				$vragen = count($_SESSION['antwoord']);
				$progress_width = 100/20;
				$progress = ($vragen)* $progress_width;
				
				echo $vragen;
				if($vragen >= 20) 
				{
					header("refresh:5;url=Resultaten.php");
				}
			}
			$feedback = feedback();
			//session_destroy();
		?>
	<script>
		$(document).ready(function(){
			$("#bar").animate({width: '<?php echo $progress ?>%'});
		});
		
	</script>
	</head>
	<body>
		<div id="container">
			<div id="page">
				<div id="som_area">
					<p id="sommen">
						<?php echo $_SESSION['info'][0] . $_SESSION['info'][2] . $_SESSION['info'][1]; ?>
					</p>
				</div>
				<div id="progress_container">
					<div id="bar"></div>
				</div>
				<?php
					if(isset($vragen)) {
						if($vragen < 21) {
				?>
							<div id="Input_vak">
							<form action="?" method="POST" id="antwoord" >
								<input type="number" name="User_antwoord" id="User_antwoord" placeholder="antwoord" required ></input>
							</form>
							<button type="submit" form="antwoord" name="Next" value="Next" >Next</button>
							</div>
				<?php
						}
						else{
						}
					}
					else {
				?>
						<div id="Input_vak">
						<form action="?" method="POST" id="antwoord" >
							<input type="number" name="User_antwoord" id="User_antwoord" placeholder="antwoord" required ></input>
						</form>
						<button type="submit" form="antwoord" name="Next" value="Next" >Next</button>
						</div>
				<?php
					}
				?>
			</div>
			<?php
				if(isset($vragen)) {
			?>
					<div id="feedback_area">
						<div id="feedback_container">
							<?php echo $feedback;	?>
						</div>
					</div>
			<?php
				}
			?>
		</div>
	</body>
</html>