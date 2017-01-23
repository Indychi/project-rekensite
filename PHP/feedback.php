<?php
	function Feedback(){
		$antwoord=$_POST['answer'];
		$name=$_POST['naam'];
		
		if($antwoord == $info[3])
		{
			echo "Goedzo" . $name . "!";
		}
		else
		{
			echo "Jammer" . $name ."het juiste antwoord is" . $info[3];
			$_COOKIE['feedback']++;
		}
		return Feedback;
	}
?>