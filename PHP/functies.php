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
	function feedback() {
		if($_SESSION['type'] == "sommen") {
			if(isset($_SESSION['antwoord'])) {
				$welk = count($_SESSION['antwoord']) - 1;
				$naam = $_SESSION['naam'];
				$a = $_SESSION['oud_info'][$welk][3];
				if($_SESSION['antwoord'][$welk] == $a) {
					$feedback = "Goed zo " . $naam;
				}
				else {
					$feedback = "Jammer " . $naam . " het juiste antwoord is " . $a;
				}
				return $feedback;
			}
		}
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

?>