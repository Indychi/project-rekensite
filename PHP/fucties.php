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
	}
	//einde functie tweegetallen
	//begin functie voor feedback generator
	/*function Feedback(){
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
	}*/
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

?>