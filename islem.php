<?php 
session_start();


if (isset($_POST['kullanici_giris'])) {
	

	if ($_POST['kadi']=="mbosoft" && $_POST['pass']=="1234") {
		
		$_SESSION['kadi']=$_POST['kadi'];
		$_SESSION['pass']=$_POST['pass'];

		if (isset($_POST['beni_hatirla'])) {

			//cookie atama işlemleri

			setcookie("kadi","mbosoft",strtotime("+1 day"));
			setcookie("pass","1234",strtotime("+1 day"));
			
		} else {

			//cookie sil...

			setcookie("kadi","mbosoft",strtotime("-1 day"));
			setcookie("pass","1234",strtotime("-1 day"));
		}

		header("Location:index.php?durum=true");
		exit;
	} else {

		//giriş bilgileri doğru değilse
		header("Location:index.php?durum=false");
		exit;
	}



}

 ?>