<?php

session_start();

include('autoload.php');

if(empty($_SESSION['id_user'])) {
  $_SESSION['id_user'] = 0;
}

$utilisateur = new Utilisateur();
$utilisateur->loadByPK($_SESSION['id_user']);

if(isset($_GET['action'])) {
  include ('traitement/'.$_GET['action'].".php");
}

if(empty($page)) $page = isset($_GET['page']) ? $_GET['page']: "accueil";
?>

<!doctype html>
<html lang="fr">
<?php include_once ("page/head.php"); ?>
<body>

<?php include_once ("page/header.php"); ?>
<div id="content">

  <nav id="menu">
    <?php include_once ("page/menu.php"); ?>
  </nav>

  <div id="page">
    <?php include('pages/'.$page.'.php') ?>
  </div>

</div>

<?php include_once ("page/footer.php"); ?>

</body>
</html>
