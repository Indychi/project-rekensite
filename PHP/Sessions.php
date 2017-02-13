<?php
	session_start();
	echo '<pre>' . print_r($_GET, TRUE) . '</pre>';
	echo '<pre>' . print_r($_POST, TRUE) . '</pre>';
	echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?>