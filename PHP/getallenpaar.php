<?php
function tweeGetallen($niveau){
	if($niveau == 4){
		$max = 10;
	}
	
	elseif($niveau == 5){
		$max = 20;
	}
	
	else{
		$max = 100;
	}
	$min = 1;
	$getal1 = mt_rand($min, $max);
	$getal2 = mt_rand($min, $max);
	$getallenPaar = array($getal1, $getal2);
	//return tweeGetallen;
}
?>

<pre>
<?php
return tweeGetallen(5);
?>
</pre>