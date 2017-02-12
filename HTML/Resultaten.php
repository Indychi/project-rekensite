<!DOCTYPE html>
<html>
	<head>
		<title>Rekensite</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<?php session_start(); ?>
	</head>
	<body>
		<div id="container" >
			<?php
				$score= 10 -($_SESSION['fout'] * 0.5);
				if ($score != 0)
				{
					echo $_SESSION['naam'] . " jouw score is " . $score;
				}
				else
				{
					$score= 1;
					echo $_SESSION['naam'] . " jouw score is " . $score;
				}
				for($d=0;$d!=20;$d++){
					echo $_SESSION['sommen'] . "<br>";
					$_SESSION['sommen']++;
					echo "jouw antwoord" . $_SESSION]['oud_antwoord'] . "<br>";
					$_SESSION['oud_antwoord']++;
				}
			?>
		</div>
	</body>
</html>