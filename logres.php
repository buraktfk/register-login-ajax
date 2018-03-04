<?php
/* Bilgi:login Register Sayfası */

include ("middleware/session.php");
$redirect=new redirect();

include("connection.php");


?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  
  <title>Giriş & Üyelik Ekranı</title>
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div class="cotn_principal">
<div class="cont_centrar">


  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>Giriş</h2>  
  <p>Daha Önceden Üye Olduysanız Buradan Giriş Yapabilirsiniz.</p> 
  <button class="btn_login" onclick="cambiar_login()">Giriş</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>Üye Ol</h2>

<link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
<script src="js/sweetalert2.min.js"></script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



  <p>Üye Değilseniz Lütfen Önce Üye Olunuz.</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">Üye Ol</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="img/bayrak.png" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="img/ata.jpeg" alt="" />
       </div>

       
       
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>Giriş</h2>
 <input type="text" id="giris_email" name="giris_email" placeholder="Email" />
<input type="password" id="giris_sifre" name="giris_sifre" placeholder="Şifre" />
<button class="btn_login" name="login" onclick="login()">Giriş</button>
  </div>
  <script>
function login()
{
    var giris_email  = $("input[name=giris_email]").val();
    var giris_sifre  = $("input[name=giris_sifre]").val();
    

$.ajax(
        {       
            type: "POST",
            url:  "login.php",
            data : {giris_sifre : giris_sifre , giris_email : giris_email},
            success: function(sonuc){
                if(sonuc == 'Hoşgeldin Admin')
                {
                   swal("Hoşgeldin Admin, Yönlendiriliyorsun","", "success");
                     setTimeout(function () {
       window.location.href = "admin/index.php"; }, 2000);
                }
                else if(sonuc == "Giriş Başarılı"){

                  swal("Hoşgeldiniz, Yönlendiriliyorsun","", "success");
                  setTimeout(function () {
       window.location.href = "user/index.php"; }, 2000);
                }
                else{

                    swal("Giriş Başarısız !","", "error");
                }  
            }
        })
}

</script>

 
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>Üye Ol</h2>
<input type="text" placeholder="Üye Adı" id="uye_adi" name="uye_adi" required />
<input type="password" placeholder="Şifre" id="sifre" name="sifre" required />
<input type="password" placeholder="Şifre Tekrar" id="sifret" name="sifret" required />
<input type="email" placeholder="Email" id="email" name="email" required  />
<button class="btn_sign_up" name="register" onclick="register()">Üye Ol</button>

  </div>
    </div>
    
  </div>
   <script type="text/javascript">

function register()
{
    var uye_adi  = $("input[name=uye_adi]").val();
    var sifre  = $("input[name=sifre]").val();
    var sifret = $("input[name=sifret]").val();
    var email = $("input[name=email]").val();

$.ajax(
        {       
            type: "POST",
            url:  "register.php",
            data : {uye_adi : uye_adi, sifre : sifre, sifret : sifret, email : email},
            success: function(sonuc){
                if(sonuc == 'ok')
                {
                   swal("Üyeliğiniz Başarılı","", "success");
                    
                }
                else if(sonuc == 'Şifreler Birbirini Tutmuyor!')
                {
                   swal("Şifreler Birbirini Tutmuyor!","", "error");
                    
                }
                else if(sonuc == 'Şifreniz 6 Haneden Küçük Olamaz!')
                {
                   swal("Şifreniz 6 Haneden Küçük Olamaz!","", "error");
                    
                }
                else if(sonuc == 'Kullanıcı Adı Eşit')
                {
                   swal("Aynı üye Adı Mevcut, Lütfen Başka Seçin !","", "error");
                    
                }
                else if(sonuc == 'Email eşit')
                {
                   swal("Email Mevcut, Daha Önceden Kayıt Olduysanız Giriş Yapınız !","", "error");
                    
                }
                else{

                    swal("Bir Sıkıntı Var !","", "error");
                }  
            }
        })
}

</script>
 </div>
</div>
  
    <script src="js/index.js"></script>
   
</body>
</html>
