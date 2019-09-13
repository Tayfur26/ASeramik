
<?php
include("sql.php");

session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayi goruntuleme yetkiniz yoktur.";
header("Refresh: 2; url=index2.php");
}else{
echo "<center><h1>Admin sayfasina hosgeldiniz..</h1></center><br>";

}
?>
<html>
    <head>
<title>Yorumlar ve Mesajlar</title>
        <meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
        <style type="text/css">
		<!--
            body{
                background-color:#bdf9f7;
            }
            .baslik th{
                background-color:#333;
                color:#FFF;
            }
            .satir0{
                background-color:#CFB;
            }
            .satir1{
                background-color:#CFD;
            }
            th {
                background-color:#C60;
				color:#FFF;
				}
        -->
            
        </style>
    </head>
    <body>
	<center><h1>Kurs Basvurulari</h1></center><br>
			<center><table border="1" cellspacing="2" cellpadding="2">
          <tr class="baslik">
            <th colspan="6" align= "center"></th> 
			</tr>
			<tr>
			
			<th>ad</th>
			<th>soyad</th>
			<th>Telefon</th> 
			<th>Kurs Tipi</th>
            <th>Musait Gun</th> 
            <th>Silme</th>			
		  </tr>
          <?php
          include("baglan.php");

          mysql_query("set names utf8");
          $sonuc=mysql_query("select * from kurs ORDER BY kgun");
          while($kayit=mysql_fetch_array($sonuc))
		  {
              $id=$kayit['id'];
			  $ad=$kayit['ad'];
			  $soyad=$kayit['soyad'];
			  $tel=$kayit['tel'];
			  $ktip=$kayit['ktip'];
			  $kgun=$kayit['kgun'];
			  
			  echo "<tr>
			            
						<td>$ad</td>
						<td>$soyad</td>
						<td>$tel</td>
						<td>$ktip</td>
						<td>$kgun</td>
						<td><a href='sil.php?id=$id'>Sil</a></td>
					</tr>";	
          }
		  
        ?>
		
		</center>
		
	
        <center>
		<table border="1" cellspacing="2" cellpadding="2">
		<h1>Mesajlar</h1>
		<tr class="baslik">
		  <th colspan="6" align= "center"></th>
		  <tr>
		  <th>adsoyad</th>
		  <th>konu</th>
		  <th>aciklama</th>
		  <th>Silme</th>
		  </tr>
		  </tr>
          <?php
          include("baglan.php");

          mysql_query("set names utf8");
          $sonuc=mysql_query("select * from ilet");
          while($kayit=mysql_fetch_array($sonuc))
		  {
		     $id=$kayit["id"];
		  $adsoyad=$kayit["adsoyad"];
		  $konu=$kayit["konu"];
		  $acikla=$kayit["acikla"];
		  echo "<tr>;
		                <td>$adsoyad</td>
						<td>$konu</td>
						<td>$acikla</td>
						<td><a href='sil2.php?id=$id'>Sil</a></td>
					</tr>";	
          }
        ?></center>

    </table>
    </body>
</html>
<?php
echo "<a href=logout.php><h2>Cikis Yap<h2></a>";
?>