<?php
if(isset($_POST['envoie']))
{
   $message = $_POST['message'];

   echo $message;

}

if(isset($_POST['envoie']))
{
   $nom = $_POST['name'];

   echo $nom;

}

if(isset($_POST['envoie']))
{
   $email = $_POST['email'];

   echo $email;

}

mail('contact@arnaudlaborde.fr', $nom, $message, $email);
header('Location: accueil.html');
// <script>alert("Votre message à bien été envoyé. Vous obtiendrez une réponse sous 48h. Merci")</script>