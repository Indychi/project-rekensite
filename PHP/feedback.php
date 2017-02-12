<?php
	function Feedback(){		
			if (isset ($_POST['Next']))#$_SESSION['antwoord'])) //<--fout bekijk notitie
			{	
				$_SESSION['punten']=10;
				//$oude_vraag=;
				$name=$_SESSION['naam'];
				//$_SESSION['past'] []=$_SESSION['past']++;
				//counter in oefeningen pleuren
		
				if($_SESSION['antwoord'] == $_SESSION['eerdere_sommen'][$oude_vraag][3])//$_SESSION['antwoord'] == $_SESSION['oud_antwoord'])
				{
					echo "<br>" . "Goedzo " . $name . "!";
					$_SESSION['counter']++;
				}
		
				/*elseif($_SESSION['fout']== 15)
				{
					echo "<br>" .$name . " ga maar naar de leraar voor meer uitleg over dit onderwerp.";
				}*/
		
				else
				{
					echo "<br>" . "Jammer " . $name ." het juiste antwoord is " . $_SESSION['info'][3];
					$_SESSION['fout']++;
					$_SESSION['punten']-0.5;
					//$_SESSION['past'] []++;
				}
			}
	}
?>