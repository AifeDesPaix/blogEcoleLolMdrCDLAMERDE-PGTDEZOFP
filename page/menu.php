<?php

$menu = "<ul>";
if($utilisateur->getIsLoaded()) {
  $menu .= "<li>Salut ".$utilisateur->getNom()."</li>";
  $menu .= "<li><a href=\"index.php?page=creerArticle\">Creer un article</a></li>";
  $menu .= "<li><a href=\"index.php?page=mesArticles\">Mes articles</a></li>";
  $menu .= "<li><a href=\"index.php?action=deconnexion\">Deconnexion</a></li>";
} else {
  $menu .= "<a href=\"index.php?page=connexion\">Connexion</a>";
}
$menu .= "</ul>";
echo $menu;
