<?php
session_start();
ob_start();
session_destroy();
echo "�ikis Yaptiniz. Ana Sayfaya Yonlendiriliyorsunuz";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>