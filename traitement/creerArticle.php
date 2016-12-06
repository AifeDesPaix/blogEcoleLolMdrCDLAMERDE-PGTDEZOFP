<?php

if(empty($_GET['titre']) || empty($_GET['texte']) ) {
  throw new Exception("Champs Mal remplis");
}

$article = new Article();
$article->setTitre($_GET['titre']);
$article->setTexte($_GET['texte']);
$article->setImage(empty($_GET['image']) ? $_GET['image'] : '');
$article->setIdUser($_SESSION['id_user']);
if($article->save()) {
  header('Location: index.php');
}


