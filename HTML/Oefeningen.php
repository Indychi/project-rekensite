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
		
			if(isset($_POST['User_antwoord'])) {
				$_SESSION['antwoord'][] = $_POST['User_antwoord'];
				$vragen = count($_SESSION['antwoord']);
				$progress = ($vragen + 1)*4.6;
				echo $vragen;
				
				if($vragen == 20) 
				{
					$vragen = count($_SESSION['antwoord']);
					header("location: Resultaten.php");
				}
			}
			else {
				$_SESSION['important'] = $_GET;
			}
			require('../PHP/Rekensommen.php');		
			Feedback();
			$_SESSION['counter']=0;
			$_SESSION['fout']=0;
			$Opdr_Totaal= $_SESSION['counter'] + $_SESSION['fout'];
			
			if($Opdr_Totaal/*$_SESSION['counter']*/  >= 20) 
			{
				unset($_SESSION['counter']);
				unset($_SESSION['fout']);
			}
			//include_once(fucties.php);
			//session_destroy();
		?>
	<script>
		$(document).ready(function(){
			$(document).ready(function(){
				$("#bar").animate({width: '<?php echo $progress ?>px'});
			});
		});
	</script>
	</head>
	<body>
		<div id="container">
			<div id="som_area">
				<div id="sommen">
					<p>
						<?php echo $_SESSION['info'][0] . $_SESSION['info'][2] . $_SESSION['info'][1]; ?>
					</p>
				</div>
			</div>
			<div id="progress_container">
				<div id="bar" ></div>
			</div>
			<div id="Input_vak">
				<form action="?" method="POST" id="antwoord" >
					<input type="number" name="User_antwoord" placeholder="antwoord" required ></input>
				</form>
				<button type="submit" form="antwoord" name="Next" value="Next" >Next</button>
			</div>
		</div>
		<div id="feedback_area">
			<?php print_r($_SESSION); echo "<br />"; print_r($_POST);?>
		</div>
	</body>
</html>