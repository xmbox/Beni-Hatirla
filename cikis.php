<?php 
session_start();
//sessionları silmek için
session_destroy();
Header("Location:index.php?durum=cikis");
?>