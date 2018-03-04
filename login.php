<?php

session_start();
include("connection.php");
if (isset($_POST['giris_email']) && isset($_POST['giris_sifre'])) {


$giris_email=mysqli_real_escape_string($conn,$_POST["giris_email"]);
$giris_sifre=mysqli_real_escape_string($conn,$_POST["giris_sifre"]);



$q=mysqli_query($conn,"SELECT * FROM uyeler WHERE email='$giris_email' AND sifre='$giris_sifre'");
$d=mysqli_fetch_array($q);


if (mysqli_num_rows($q) AND $d["yetki"]=='1'){
  echo "Hoşgeldin Admin";
  $_SESSION["yetki"]=$d["yetki"];
  
}

elseif(mysqli_num_rows($q)){
  echo "Giriş Başarılı";
  $_SESSION["email"]=$giris_email;
  
  
}
else{
   
   
}

}
?>