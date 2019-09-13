<?php
include('baglan.php');
$sorgu = mysql_query("SELECT `kullanici`, `parola` FROM `admin` WHERE 1");
	$satir = mysql_fetch_array($sorgu);
	$kullanici = $satir['kullanici'];
	$parola = $satir['parola'];
	
?>