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
				$name= $_SESSION['naam'];
				$score= 10 -($_SESSION['fout'] * 0.5);
				if ($score != 0)
				{
					echo $name . " jouw score is " . $score . "<br>" . "<br>";
				}
				else
				{
					$score= 1;
					echo $name . " jouw score is " . $score . "<br>" . "<br>";
				}
				// $i hoort bij de foreach hieronder
				$i = 0;
				
				foreach($_SESSION['sommen'] as $sommen )
				{
					print $sommen;
					echo "<br>" . "jouw antwoord " . $_SESSION['antwoord'][$i] . "<br>";
					$i++;
				}
			?>
		</div>
	</body>
</html>