<?php

if(empty($_GET['nom']) && empty($_GET['mdp']) ) {
  throw new Exception("Champs Mal remplis");
}

$utilisateur = new Utilisateur();
$utilisateur->setNom($_GET['nom']);
$utilisateur->setMdp(md5($_GET['mdp']));
$utilisateur->setMail(empty($_GET['mail']) ? $_GET['mail'] : 'connard@connard.com');

if($utilisateur->save()) {
  include ('connexion.php');
}

