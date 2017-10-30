<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$page="contact";
$valide='';
$nom='';
$mail='';
$tel='';
$adresse='';
$demande='';
if(isset($_POST['submit'])){
 

$nom=$_POST['nom'];
$mail=$_POST['email'];
$tel=$_POST['tel'];
$adresse=$_POST['adresse'];
$demande=$_POST['demande'];
if(($mail!='')||($nom!='')||($adresse!='')||($demande!='')||($tel!='')){
$valide='valide';


// Multiple recipients
$to = $mail; // note the comma

// Subject
$subject = 'SoSweet confirmation';

// Message
$message = '<html>
<head>
<title>SoSweet confirmation</title>
</head>
<body>Nous vous confirmons que votre demande d’informations a bien été envoyée.<br />
Nous vous répondrons dans les plus brefs délais.<br />
Ci-dessous, un récapitulatif de vos données :<br />
Nom/Prénom:$nom<br />
Email:$mail<br />
Téléphone: $tel<br />
Adresse:$adresse<br />
Demande:$demande
</body>
</html>
';

// To send HTML mail, the Content-type header must be set

$headers = "MIME-Version: 1.0\r\n";
$headers = "From: SoSweet <amine.chiouchiou@gmail.com>\r\n";
$headers.= "Content-Type: text/plain;charset=utf-8\r\n";
$headers.= "Reply-To: $to\r\n";  
$headers.= "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);

$oursubject = 'Demande d\'information';
$ourmessage='<html>
<head>
<title>Demande d\'information</title>
</head>
<body>
Ci-dessous, un récapitulatif de la demande :<br /><br />
Nom/Prénom:$nom<br />
Email:$mail<br />
Téléphone: $tel<br />
Adresse:$adresse<br />
Demande:$demande.
</body>
</html>';
$headers = "MIME-Version: 1.0\r\n";
$headers = "From: SoSweet <amine.chiouchiou@gmail.com>\r\n";
$headers.= "Content-Type: text/plain;charset=utf-8\r\n";
$headers.= "Reply-To: $to\r\n";  
$headers.= "X-Mailer: PHP/" . phpversion();

mail("amine.chiouchiou@gmail.com", $oursubject, $ourmessage, $headers);
}




}


?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>So sweet | Pâtisserie oriontale traditionnelle</title>
<meta name="description" content="So sweet | Pâtisserie oriontale traditionnelle" />
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="styles/fonts.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>
<!--Header-->
<?php require_once 'views/header.php' ?>
<!--End Header-->
<!--Content-->
<div class="page">
  <div class="container">
    <div style="margin-top:20px;" align="center">
      <?php if ($valide=="echec"){ ?>
      <div class="alert_box"><div><?php echo "Votre message n'a pas été envoyé, essayez de nouveau SVP"; ?></div></div>
      <?php }else if($valide=="valide"){?>
      <div class="valid_box"><div><?php echo "Votre message a été envoyé avec succes"; ?><a href="index.php"><i class="fa fa-times" aria-hidden="true"></i></a></div></div>
      <?php }?>
    </div>
    <form action="" method="post" name="formulairedecontact" class="form1" onSubmit="return VerifContact();">
      <div class="item-contact">
        <label for="nom">Nom/Prénom</label>
        <input name="nom" id="nom" type="text" value="" class="champ" />
        <span id="id_nom" class="alert"></span></div>
      <div class="item-contact">
        <label for="email">Couriel</label>
        <input name="email" id="email" type="text" value="" class="champ" />
        <span id="id_email" class="alert"></span></div>
      <div class="item-contact">
        <label for="tel">Téléphone</label>
        <input name="tel" id="tel" type="text" value="" class="champ" onkeypress="return scanTouche(event);" />
        <span id="id_tel" class="alert"></span></div>
      <div class="item-contact">
        <label for="produits">Adresse</label>
        <input name="adresse" id="adresse" type="text" value="" class="champ" />
        <span id="id_adresse" class="alert"></span></div>
      <div class="item-contact item-textarea">
        <label for="demande">Demande</label>
        <textarea name="demande" id="demande" class="champ" cols="" rows=""></textarea>
        <span id="id_demande" class="alert"></span></div>
      <input class="sendButton" type="submit" name="submit" id="submit" value="Envoyer">
    </form>
  </div>
</div>
<!--End Content-->
<!--Footer-->
<footer>
  <div class="container">
    <?php require_once 'views/footer.php' ?>
  </div>
</footer>
<!--En Footer-->
</body>
</html>
