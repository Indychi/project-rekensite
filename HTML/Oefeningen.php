<!DOCTYPE html>
<html>
	<head>
		<title>Rekenen</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
			
		?>
	</head>
	<body>
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
			</div>
			<script>
				$( function() {
					$( "#Progress" ).progressbar({
						value: <?php echo $progress; ?>
					});
				} );
			</script>
			<div id="Progress"></div>
			<div id="Input_vak">
				<form action="?" method="POST" id="antwoord" >
					<input type="number" name="User_antwoord" placeholder="antwoord" onkeypress="move" required></input>
				</form>
				<button type="submit" form="antwoord" name="Next" value="Next" onkeypress="move()">Next</button>
			</div>
		</div>
		<div id="feedback_area"><?php print_r($_SESSION); echo "<br />"; print_r($_POST);?></div>
	</body>
</html>