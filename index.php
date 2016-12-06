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

$page = isset($_GET['page']) ? $_GET['page']: "accueil";
?>

<!doctype html>
<html lang="fr">
<?php include_once ("page/head.php"); ?>
<body>

<?php include_once ("page/header.php"); ?>

<div id="content">
  <?php include('pages/'.$page.'.php') ?>
</div>

<?php include_once ("page/footer.php"); ?>

</body>
</html>
