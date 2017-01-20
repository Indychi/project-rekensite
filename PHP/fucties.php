<?php
	function TweeGetallen($niveau){
		if($niveau == 4)
		{
			$max = 10;
		}
		
		elseif($niveau == 5)
		{
			$max = 20;
		}
		
		elseif($niveau == 6)
		{
			$max = 100;
		}
		else{}
		
		$min = 1;
		$getal1 = mt_rand($min, $max);
		$getal2 = mt_rand($min, $max);
		$getallenPaar = array($getal1, $getal2);
		return $getallenPaar;
function TweeGetallen($niveau){
	if($niveau == 4)
	{
		$max = 10;
	}
	//einde functie tweegetallen
	//begin functie voor feedback generator
	function Feedback(){
		$inputAnswer=$_GET['answer'];
		$name=$_GET['naam'];
		$_COOKIE['feedback']++;
		if($inputAnswer == $info[3])
		{
			echo "Goedzo" . $name . "!";
		}
		else
		{
			echo "Jammer" . $name ."het juiste antwoord is" . $info[3];
		}
		return Feedback;
	}
	//einde functie voor feedback generator
	//begin functie som
	function som($d, $number1, $number2){
		switch($d)
		{
			case "0":
				$anwser = $number1 + $number2;
				break;
			case "1":
				$anwser = $number1 - $number2;
				break;
			case "2":
				$anwser = $number1 * $number2;
				break;
			case "3":
				$anwser = $number1 / $number2;
				break;
		}
		return $anwser;
	}
	//einde functie som
	
	$min = 1;
	$getal1 = mt_rand($min, $max);
	$getal2 = mt_rand($min, $max);
	$getallenPaar = array($getal1, $getal2);
	return $getallenPaar;
}
//einde functie tweegetallen
//begin functie voor feedback generator
function Feedback(){
	$inputAnswer=$_GET['answer'];
	$name=$_GET['naam'];
	$_COOKIE['feedback']++;
	if($inputAnswer == $info[3])
	{
		echo "Goedzo" . $name . "!";
	}
	else
	{
		echo "Jammer" . $name ."het juiste antwoord is" . $info[3];
	}
	return Feedback;
}
//einde functie voor feedback generator
//begin functie som
function som($d, $number1, $number2){
	switch($d)
	{
		case "0":
			$anwser = $number1 + $number2;
			break;
		case "1":
			$anwser = $number1 - $number2;
			break;
		case "2":
			$anwser = $number1 * $number2;
			break;
		case "3":
			$anwser = $number1 / $number2;
			break;
	}
	return $anwser;
}
//einde functie som
<<<<<<< HEAD
?>
=======
?>
>>>>>>> origin/master
