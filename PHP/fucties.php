<?php
function tweeGetallen($niveau){
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
	$min = 1;
	$getal1 = mt_rand($min, $max);
	$getal2 = mt_rand($min, $max);
	$getallenPaar = array($getal1, $getal2);
	return tweeGetallen;
}
//einde functie tweegetallen
//begin functie voor wilekeurige operators
function RandomOperator{
	$operator = array(+,-,/,*);	
	return $operator[mt_rand(0,3)];
}
//einde functie voor wilekeurige operators
//begin functie voor feedback generator
function Feedback{
	$fout_counter=0;
}
?>
