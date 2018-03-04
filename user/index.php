<?php session_start(); 

if (isset($_SESSION["email"]) or isset($_SESSION["yetki"])) {


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="../css/sweetalert2.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/sweetalert2.min.js"></script> 
    <title>Yakında.. - Kullanıcı Ara yüzü</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">

  </head>

  <body>
              
    <div class="overlay"></div>
<script>
function cikis()
{
    

$.ajax(
        {       
            type: "POST",
            url:  "../cikis.php",
            success: function(sonuc){
                if(sonuc == 'cikis')
                {
                   swal("Çıkış Yaptınız..","", "success");
                     setTimeout(function () {
       window.location.href = "../logres.php"; }, 2000);
                }

                else{

                    swal("Giriş Başarısız !","", "error");
                }  
            }
        })
}

</script>
    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">Yakında..</h1>
              <p class="mb-5">Sitemiz Yakında Hizmetinizde Olacak Üye Olduğunuz İçin Teşekkür Ederiz..
                <strong>Şubat 2018</strong></br></br>Erken Haberdar Olmak İçin Mail Listemize Kayıt Olun!</p>
              <div class="input-group input-group-newsletter">
          
                <div class="input-group-append">

                  <button class="btn btn-primary" onclick="cikis()">Çıkış Yap</button>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/vide/jquery.vide.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>
    <script src="../js/index.js"></script>
  </body>

</html>
 





<?php
}

else{

echo '<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/sweetalert2.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/sweetalert2.min.js"></script> 
</head>
<body>';

  header("refresh: 2; url=../logres.php");


 ?>

 <script type="text/javascript">

   swal("Lütfen Giriş Yapınız !","", "error");
                     

 </script>

 <?php 

 echo '</body>
 <script src="../js/index.js"></script>
</html>';

} ?>