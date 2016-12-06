<?php
$article = new Article();

if(empty($_GET['id_article'])) {
  throw new Exception("PTUE");
}
if(!$article->loadByPK($_GET['id_article'])) {
  throw new Exception('Peut pads charger l\'article');
}

if($article->getIdUser() == $_SESSION['id_user']) {
  $article->delete();
}
