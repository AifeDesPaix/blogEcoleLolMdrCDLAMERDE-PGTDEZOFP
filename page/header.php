<header>
  <?php
if($utilisateur->getIsLoaded()) {
  echo 'salut  '.$utilisateur->getNom();
  echo '<a href="index.php?page=creerArticle">Creer un article</a>';
  echo '<a href="index.php?action=deconnexion">Deconnexion</a>';
} else {
  echo '<a href="index.php?page=connexion">Connexion</a>';
}
?>

</header>
