<!DOCTYPE html>
<html>
	<head>
		<title>Rekenen</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../Image/plus.png">
		<?php
			session_start();
			if(isset($_SESSION['antwoord'])){
				if (count($_SESSION['antwoord']) > 0)
				{
					unset($_SESSION['antwoord']);
					unset($_SESSION['past']);
					unset($_SESSION['oud_antwoord']);
					unset($_SESSION['sommen']);
					unset($_SESSION['info']);
					unset($_SESSION['oud_info']);
					unset($_SESSION['operator']);
					unset($_SESSION['niveau']);
					unset($_SESSION['type']);
					unset($_SESSION['punten']);
					unset($_SESSION['fout']);
				}
			}
			if (isset ($_POST['verzend']))
			{
				$_SESSION['naam']=$_POST['naam'];
			}
			$name= $_SESSION['naam'];
			echo "Goedendag " . $name;
		?>
	</head>
	<body>
		<div id="container">
			<div id="Home_Main"></div>
			<div id="Side_bar">
				<div id="groep4">
					<div class="dropdown">
						<button class="dropbutton">Groep 4</button>
						<div class="dropdown-content">
							<a href="Oefeningen.php?operator=plus&type=sommen&niveau=4">Plussommen</a>
							<a href="Oefeningen.php?operator=min&type=sommen&niveau=4">Minsommen</a>
							<a href="Oefeningen.php?operator=keer&type=sommen&niveau=4">Keersommen</a>
							<a href="Oefeningen.php?operator=deel&type=sommen&niveau=4">Deeldoorsommen</a>
							<a href="Oefeningen.php?operator=alles&type=sommen&niveau=4">Alle sommen</a>
							<a href="Oefeningen.php?operator=alles&type=toets&niveau=4">Toets</a>
						</div>
					</div>
				</div>
				<div id="groep5">
					<div class="dropdown">
						<button class="dropbutton">Groep 5</button>
						<div class="dropdown-content">
							<a href="Oefeningen.php?operator=plus&type=sommen&niveau=5">Plussommen</a>
							<a href="Oefeningen.php?operator=min&type=sommen&niveau=5">Minsommen</a>
							<a href="Oefeningen.php?operator=keer&type=sommen&niveau=5">Keersommen</a>
							<a href="Oefeningen.php?operator=deel&type=sommen&niveau=5">Deeldoorsommen</a>
							<a href="Oefeningen.php?operator=alles&type=sommen&niveau=5">Alle sommen</a>
							<a href="Oefeningen.php?operator=alles&type=toets&niveau=5">Toets</a>
						</div>
					</div>
				</div>
				<div id="groep6">
					<div class="dropdown">
						<button class="dropbutton">Groep 6</button>
						<div class="dropdown-content">
							<a href="Oefeningen.php?operator=plus&type=sommen&niveau=6">Plussommen</a>
							<a href="Oefeningen.php?operator=min&type=sommen&niveau=6">Minsommen</a>
							<a href="Oefeningen.php?operator=keer&type=sommen&niveau=6">Keersommen</a>
							<a href="Oefeningen.php?operator=deel&type=sommen&niveau=6">Deeldoorsommen</a>
							<a href="Oefeningen.php?operator=alles&type=sommen&niveau=6">Alle sommen</a>
							<a href="Oefeningen.php?operator=alles&type=toets&niveau=6">Toets</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>