<?php
// bu dosya baglan.php dosyasidir.
$sunucu="localhost";
$kullanici="o121620131023";
$sifre="Yd6X90s1YZGzU";
$veritabani="o121620131023";
if
(@mysql_connect($sunucu,$kullanici,$sifre)==false)
{
$mesaj="<b>Hata</b>: Baglanti basarisiz!<br>";
$mesaj.="<b>Hata a�iklamasi</b>: ".mysql_error();
   die($mesaj);
}
if
(@mysql_select_db($veritabani)==false)
{
$mesaj="<b>Hata</b>: $veritabani veritabani se�ilemedi!<br>";
$mesaj.="<b>Hata a�iklamasi</b>: ".mysql_error();
   die($mesaj);
}
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8_general_ci");  
?>