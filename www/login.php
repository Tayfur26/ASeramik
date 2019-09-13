<?php
include("sql.php");
session_start();
ob_start();
if(($_POST["kullanici1"]==$kullanici) and ($_POST["parola1"]==$parola)){
$_SESSION["login"] = "true";
$_SESSION["kullanici"] = $kullanici;
$_SESSION["parola"] = $parola;
header("Location:admin.php");
}else{
echo "Kullanci Adi veya Sifre Yanlis.<br>";
echo "Giris sayfasina yonlendiriliyorsunuz.";
header("Refresh: 2; url=index2.php");
}
ob_end_flush();
?>