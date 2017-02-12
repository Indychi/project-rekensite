<?php
	function Feedback(){
		if($_SESSION['type'] != 'toets')
		{							
			if (isset ($_POST['Next']))
			{	
				$_SESSION['punten']=10;
				$vragen = count($_SESSION['antwoord']) -1;
				$name=$_SESSION['naam'];
				$a = $_SESSION['past'][$vragen];
				$b = $_SESSION['oud_antwoord'][$vragen];
				
				if($b == $a)
				{
					echo "<br>" . "Goedzo " . $name . "!";
					
				}
		
				/*elseif($_SESSION['fout']== 15)
				{
					echo "<br>" .$name . " ga maar naar de leraar voor meer uitleg over dit onderwerp.";
				}*/
		
				else
				{
					echo "<br>" . "Jammer " . $name ." het juiste antwoord was " . $b;
					if (isset($_SESSION['fout']))
					{
						$_SESSION['fout']+=1;
					}
					else
					{
						$_SESSION['fout']=1;
					}
				}
			}
		}
		else
		{				
				$vragen = count($_SESSION['antwoord']) -1;
				$name=$_SESSION['naam'];
				$a = $_SESSION['past'][$vragen];
				$b = $_SESSION['oud_antwoord'][$vragen];

			if($b != $a)
			{
					if (isset($_SESSION['fout']))
					{
						$_SESSION['fout']+=1;
					}
					
					else
					{
						$_SESSION['fout']=1;
					}
			}
		}
	}
?>