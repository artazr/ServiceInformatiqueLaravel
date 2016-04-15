<?php
$name=@htmlspecialchars($_POST['name']);
$email=@htmlspecialchars($_POST['email']);
$objet=@htmlspecialchars($_POST['subject']);
$monmessage=@htmlspecialchars($_POST['message']);
 
$to = "alexmorand26@gmail.com";
$subject = "Devis en ligne";
$message = " Name : " . $name . "\r\n Objet : " . $objet . "\r\n Email du client: " . $email . "\r\n Message : " . $monmessage;
 
 
$from = "Service-Informatique";
$headers = "From :" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://service-informatique.fr';</script>";
}else{
  echo "Erreur! Veuillez Remplir les Champs Requis.";
}