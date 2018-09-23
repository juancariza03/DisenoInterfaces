<?php

	$mysqli = new mysqli('localhost','root','','mi_revista');
	$mysqli -> set_charset("utf8");
	$query = $mysqli -> query("SELECT * FROM ciudad");

?>