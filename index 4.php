<?php
session_start();

@$user=$_POST["number"];
@$pass=$_POST["pass"];
@$valider=$_POST["submit"];

if(isset($valider)){

 if($user=="73648901524" && $pass=="768901"){
 $_SESSION["autoriser"]="oui";
 header("location:Solde.php");
 }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Connexion - Mon compte Credit Agricole</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="Style.css"/>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
<script type="text/javascript" src="Java.js"></script>

	</head>
	<body>
	<nav>
 <img src="https://www.pricebank.fr/uploads/banques/logos/vignettes/center/big/80.png" id="logoca"/>
  
	</nav>
	<div class="login">
	<p style="font-size:25px;color:#347780;">ACCÉDER À <b>MES COMPTES</b></p>
	<form method="post" action="#">
	<label><b>IDENTIFIANT</b><br /><sub style="color:gray;">saisissez votre identifiant a 11 chiffres</sub></label><br />
<input type="tel" placeholder="Entrez votre identifiant" name="number" style="margin-bottom:20px;" maxlength="11"/><br />

<label><b>CODE PERSONNEL</b></label><br />
<input type="password" pattern="[0-9]*" inputmode="numeric" placeholder="Tapez votre code" name="pass" style="margin-bottom:20px;" maxlength="6"/>
<button name="submit"><b>VALIDER</b></button>
	</form>
	
	<center><h3>Vous n'est pas encore client ?</h3></center>
	
	<button onclick="client()"><b>DEVENIR CLIENT</b></button>
	<script>const client=()=>{
swal({
  title: "On vous attend",
  text: "rendez vous dans votre banque credit agricole la plus proche pour ouvrir un compte",
  icon: "",
  dangerMode: true,
})}</script>
		<h6>Votre identification ne change pas ,Pour accedez a votre compte,saisissez votre identifiant (N°de compte ou de contrat CA en ligne) et votre code personnel habituels</h6>
	</div>

	</body>
</html>