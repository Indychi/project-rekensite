<?php
	function Feedback(){
		$inputAnswer=$_GET['answer'];
		$name=$_GET['naam'];
		
		if($inputAnswer == $info[3])
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