<?php
	include('fucties.php');
	$number1 = Tweegetallen($_GET['niveau'])[0];
	$number2 = Tweegetallen($_GET['niveau'])[1];
	$all_operators = array('+', '-', '*', '/');
	$deelbaar = $number1 % $number2;
	if($_GET['operator'] == 'plus')
	{
		$d = 0;
	}
	if($_GET['operator'] == 'min')
	{
		$d = 1;
		while($number1 < $number2)
		{
			$number1 = Tweegetallen($_GET['niveau'])[0];
			$number2 = Tweegetallen($_GET['niveau'])[1];
		}
	}
	if($_GET['operator'] == 'keer')
	{
		$d = 2;
	}
	elseif($_GET['operator'] == 'deel')
	{
		$d = 3;
		}
	elseif($_GET['operator'] == 'alles')
	{
		$d = rand(0,3);
	}
	if($d == 3)
	{
		while($deelbaar != 0)
		{
			$number1 = Tweegetallen($_GET['niveau'])[0];
			$number2 = Tweegetallen($_GET['niveau'])[1];
			$deelbaar = $number1 % $number2;
		}
	}
	switch($all_operators[$d])
	{
		case "+":
			$anwser = $number1 + $number2;
			break;
		case "-":
			$anwser = $number1 - $number2;
			break;
		case "*":
			$anwser = $number1 * $number2;
			break;
		case "/":
			$anwser = $number1 / $number2;
			break;
	}
	$info = array($number1, $number2, $all_operators[$d], $anwser);
?>
	