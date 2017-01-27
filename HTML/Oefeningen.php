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
				if(isset($_SESSION['antwoord'])){
					$f = count($_SESSION['antwoord']) - 1;
					$_SESSION['eerdere_antwoorden'][] = $_SESSION['antwoord'][$f];
				}
				$_SESSION['antwoord'][] = $_POST['User_antwoord'];
				$vragen = count($_SESSION['antwoord']);
				$progress_width = 900/20;
				$progress = ($vragen)* $progress_width;
				echo $vragen;
				
				if($_SESSION['type'] == 'toets'){
					if($vragen == 20) 
					{
						header("refresh:5;url= Resultaten.php");
					}
				}
				else{
					if($vragen == 20){
						header("refresh:5;url= HTML.php");
					}
				}
			}
			else {
				$_SESSION['important'] = $_GET;
			}
			require('../PHP/Rekensommen.php');
			include_once('../PHP/functies.php');
			Feedback();
			$_SESSION['counter']=0;
			$_SESSION['fout']=0;
			$Opdr_Totaal= $_SESSION['counter'] + $_SESSION['fout'];
			
			if($Opdr_Totaal/*$_SESSION['counter']*/  >= 20) 
			{
				unset($_SESSION['counter']);
				unset($_SESSION['fout']);
			}
			//session_destroy();
		?>
	<script>
		$(document).ready(function(){
			$("#bar").animate({width: '<?php echo $progress ?>px'});
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
					<input type="text" name="User_antwoord" pattern="\d*" placeholder="antwoord" required ></input>
				</form>
				<button type="submit" form="antwoord" name="Next" value="Next" >Next</button>
			</div>
		</div>
		<div id="feedback_area">
			<?php print_r($_SESSION) ?>
		</div>
	</body>
</html>