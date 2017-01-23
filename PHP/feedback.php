<?php
	function Feedback(){
		$antwoord=$_POST['User_antwoord'];
		$name=$_POST['naam'];
		$_SESSION['counter']=0;
		
		if($antwoord == $info[3])
		{
			echo "Goedzo" . $name . "!";
		}
		
		elseif($_SESSION == 15)
		{
			echo $name . "ga maar naar de leraar voor meer uitleg over dit onderwerp.";
		}
		
		else
		{
			echo "Jammer" . $name ."het juiste antwoord is" . $info[3];
			$_COOKIE['feedback']++;
		}
		return Feedback;
	}
?>