 <?php
 
  $adsoyad = $_POST['adsoyad'];
  $konu = $_POST['konu'];
  $acikla = $_POST['acikla'];
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
 if($adsoyad=="" or $konu=="" or $acikla="")
{

        
        echo '<script language="javascript" type="text/javascript"> alert("Lutfen Tum Alanlari Doldurunuz"); </script>';
		

        echo "<a href='$url'>iletisim Ekranina Don</a>";
}
else
{

include ('baglan.php'); 
$baglan=mysqli_connect("$sunucu","$kullanici","$sifre","$veritabani");
 mysqli_set_charset($baglan, "utf8");

$sqlekle="INSERT INTO ilet( adsoyad , konu , acikla) VALUES ('$adsoyad','$konu','$acikla')";
 
mysqli_query($baglan,$sqlekle);
 echo '<script language="javascript" type="text/javascript"> alert("Gorus belirttiginiz icin tesekkur ederiz."); </script>';
 header("Refresh: 0; url=index.php");
}


 ?>