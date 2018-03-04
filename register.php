<?php
include("connection.php");

$kuladi_esitmi="";
$email_esitmi="";
$sifre_esitmi="";


$uye_adi=mysqli_real_escape_string($conn,$_POST['uye_adi']);
$sifre=mysqli_real_escape_string($conn,$_POST['sifre']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$sifret=mysqli_real_escape_string($conn,$_POST['sifret']);


if ($sifre!=$sifret) {
	$sifre_esitmi="error";
  echo "Şifreler Birbirini Tutmuyor!";
  
}

elseif(strlen($sifre)<6){
  echo "Şifreniz 6 Haneden Küçük Olamaz!";

}


else {
  
  	
  /**/

$varmi=mysqli_query($conn,"SELECT uye_adi,email FROM uyeler");

while($row=mysqli_fetch_array($varmi)){
	if ($row['uye_adi']==$uye_adi) {
		$kuladi_esitmi = "Kullanıcı Adı Eşit";
		echo "Kullanıcı Adı Eşit";
		break;
	}

	elseif ($row['email']==$email) {
		$email_esitmi = "Email eşit";
		echo "Email eşit";
		break;
	}
	else{
		$kuladi_esitmi="uygun";
		$email_esitmi="uygun";
		
	}


}

}



if ($sifre_esitmi!="error" and $kuladi_esitmi=="uygun" and $email_esitmi=="uygun") {
	


$q=mysqli_query($conn,"INSERT INTO uyeler (uye_adi,sifre,email,sifret) VALUES ('$uye_adi','$sifre','$email','$sifret')");
if ($q) {
	echo "ok";
}
else{
	echo "Üyelik İşlemi Başarısız";
	
}

}


?>