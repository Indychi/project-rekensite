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
	return TweeGetallen;
}
//einde functie tweegetallen
//begin functie voor feedback generator
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
	}
	return Feedback;
}
?>
setcookie('test', 'bullshit');