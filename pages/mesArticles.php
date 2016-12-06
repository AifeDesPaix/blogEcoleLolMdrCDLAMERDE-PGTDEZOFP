<?php
$articles = Article::getAll(10, 'id_user = '.$_SESSION['id_user']);

if(!empty($articles)) {
  $htmlArticles = '';
  /** @var Article $article */
  foreach ($articles as $article) {
    $htmlArticles .= '<div class="article">';
    $htmlArticles .= '<h2>'.$article->getTitre().'</h2>';
    $htmlArticles .= '<p>'.$article->getTexte().'</p>';
    if(!empty($urlImg = $article->getImage())) {
      $htmlArticles .= '<img src="'.$urlImg.'" alt="cool">';
    }
    $htmlArticles .='<a href="index.php?action=supprimerArticle&id_article='.$article->getIdArticle().'">Supprimer l\'article</a>';
    $htmlArticles .= '</div>';
  }
  echo $htmlArticles;

}
