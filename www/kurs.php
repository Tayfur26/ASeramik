 <?php
 $ad = $_POST['ad'];
 $soyad = $_POST['soyad'];
 $tel  = $_POST['tel'];
 $kgun = $_POST['kgun'];
 $ktip = $_POST['ktip'];
 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
 if($ad=="" or $soyad=="" or $tel="")
{ echo '<script language="javascript" type="text/javascript"> alert("Lutfen Tum Alanlari Doldurunuz"); </script>';
  header("Refresh: 0; url=index.php");
}
else
{
include ('baglan.php'); 
$baglan=mysqli_connect("$sunucu","$kullanici","$sifre","$veritabani");
 mysqli_set_charset($baglan, "utf8");
 
$sqlekle="INSERT INTO kurs( ad, soyad, tel, ktip, kgun) VALUES ('$ad','$soyad','$tel','$ktip','$kgun')";
 
$sonuc=mysqli_query($baglan,$sqlekle);
 echo '<script language="javascript" type="text/javascript"> alert("Bilgileriniz Alindi. En kisa surede sizi ariyacagiz."); </script>';
 header("Refresh: 0; url=index.php");
}
?>