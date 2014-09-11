<meta charset="utf-8" />

<?php
$msg_erreur = "Erreur. Les champs suivants doivent être obligatoirement 
remplis :<br/><br/>";
$msg_ok = "Votre demande a bien été prise en compte.";
$message = $msg_erreur;
define('MAIL_DESTINATAIRE','florian.bellotti@viacesi.fr'); // remplacer par votre email
define('MAIL_SUJET','message CV en ligne');

$tel="";

// vérification des champs
if (empty($_POST['name'])) 
$message .= "Votre nom<br/>";
if (!empty($_POST['telephone']))
$tel=$_POST['telephone'];
if (empty($_POST['email'])) 
$message .= "Votre email<br/>";
if (empty($_POST['message'])) 
$message .= "Votre message<br/>";
 
// si un champ est vide, on affiche le message d'erreur et on stoppe le script
if (strlen($message) > strlen($msg_erreur)) {
   echo $message; die();
}

//Préparation de l'entête du mail:
$mail_entete  = "From: ".$_POST['email']."\n";
 
// préparation du corps du mail
$mail_corps  = "Message de :". $nom."\n";
$mail_corps  = "numéro de téléphone :". $tel."\n";
$mail_corps .= "Adresse : ".$_POST['email']."\n";
$mail_corps .= "Message: ".$_POST['message']."\n\n\n";

// envoi du mail
if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$mail_entete)) {
  //Le mail est bien expédié
  echo $msg_ok;
} else {
  //Le mail n'a pas été expédié
  echo "Une erreur est survenue lors de l'envoi du formulaire par email";
}
 
?>