<?php

if(empty($_GET['nom']) && empty($_GET['mdp']) ) {
  throw new Exception("Champs Mal remplis");
}

$nom = $_GET['nom'];
$mdp = md5($_GET['mdp']);

$utilisateur = new Utilisateur();
if($utilisateur->loadByNameMdp($nom, $mdp)) {
  $_SESSION['id_user'] = $utilisateur->getIdUser();
}

else {var_dump('probleme');
$page = 'connexion';
}
