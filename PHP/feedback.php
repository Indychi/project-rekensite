<?php
	function Feedback(){		
			if (isset ($_SESSION['antwoord'])) //<--fout bekijk notitie
			{	
				$f = count($_SESSION['antwoord']) - 2;
				$antwoord=$_SESSION['eerdere_antwoorden'][$f];
				$name=$_SESSION['naam'];
				//$_SESSION['past'] []=$_SESSION['past']++;
				//counter in oefeningen pleuren
		
				if($f == $antwoord)//$_SESSION['antwoord'] == $_SESSION['oud_antwoord'])
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
					$_SESSION['past'] []++;
				}
			}
	}
?>	