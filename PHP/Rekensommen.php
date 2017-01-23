<?php
	include('fucties.php');
	$number1 = Tweegetallen($_SESSION['niveau'])[0];
	$number2 = Tweegetallen($_SESSION['niveau'])[1];
	$all_operators = array('+', '-', '*', '/');
	$deelbaar = $number1 % $number2;
	if($_SESSION['operator'] == 'plus'){
		$d = 0;
	}
	if($_SESSION['operator'] == 'min'){
		$d = 1;
		while($number1 < $number2){
			$number1 = Tweegetallen($_SESSION['niveau'])[0];
			$number2 = Tweegetallen($_SESSION['niveau'])[1];
		}
	}
	if($_SESSION['operator'] == 'keer'){
		$d = 2;
	}
	elseif($_SESSION['operator'] == 'deel'){
		$d = 3;
		}
	elseif($_SESSION['operator'] == 'alles'){
		$d = rand(0,3);
	}
	if($d == 3){
		while($deelbaar != 0)
		{
			$number1 = Tweegetallen($_SESSION['niveau'])[0];
			$number2 = Tweegetallen($_SESSION['niveau'])[1];
			$deelbaar = $number1 % $number2;
		}
	}
	$info = array($number1, $number2, $all_operators[$d], som($d, $number1, $number2));
?>
	