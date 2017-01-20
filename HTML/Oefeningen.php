<!DOCTYPE html>
<html>
	<head>
		<title>Rekenen</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
		<link rel="icon" href="../image/plus.png">
		<?php
			setcookie('feedback', '0');
		?>
	</head>
	<body>
		<p>
<?php
	require('../PHP/Rekensommen.php');
	echo $info[0] . $info[2] . $info[1];
?>
		</p>	
	</body>
</html>