<?php
include ("baglan.php");
 
$id = $_GET["id"];
$delete = mysql_query("delete from ilet where id='$id'");
 
if ($delete)
{
    header('Location: admin.php');
}
else
{
    echo "Hata";
}