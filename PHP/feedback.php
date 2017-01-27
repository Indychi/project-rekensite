<?php
	function Feedback(){
		if (isset ($_POST['Next']))
		{		
			$_SESSION['User_antwoord']=$_POST['User_antwoord'];
			$antwoord=$_SESSION['User_antwoord'];
			$name=$_SESSION['naam'];
			//$_SESSION['counter']=0;
			//counter in oefeningen pleuren
		
			if($antwoord == $info[3])
			{
				echo "Goedzo" . $name . "!";
				$_SESSION['counter']++;
			}
		
			elseif($_SESSION['fout']== 15)
			{
				echo $name . "ga maar naar de leraar voor meer uitleg over dit onderwerp.";
			}
		
			else
			{
				echo "Jammer" . $name ."het juiste antwoord is" . $info[3];
				$_SESSION['fout']++;
			}
		}
	}
?>	