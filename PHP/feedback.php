<?php
	function feedback() {
		if($_SESSION['type'] == "sommen") {
			if(isset($_SESSION['antwoord'])) {
				$welk = count($_SESSION['antwoord']) - 1;
				$naam = $_SESSION['naam'];
				$a = $_SESSION['oud_info'][$welk][3];
				$b = $_SESSION['antwoord'][$welk];
				if($b == $a) {
					$feedback = "Goed zo " . $naam;
				}
				else {
					$feedback = "Jammer " . $naam . " het juiste antwoord is " . $a;
				}
				return $feedback;
			}
		}
	}
?>