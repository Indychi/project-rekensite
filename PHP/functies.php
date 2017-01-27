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
	function Feedback(){
		if (isset ($_POST['Next']))
		{		
			$_SESSION['User_antwoord']=$_POST['User_antwoord'];
			$antwoord=$_SESSION['User_antwoord'];
			$name=$_SESSION['naam'];
			//$_SESSION['counter']=0;
			//counter in oefeningen pleuren
		
			if($antwoord == $_SESSION['info'][3])
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