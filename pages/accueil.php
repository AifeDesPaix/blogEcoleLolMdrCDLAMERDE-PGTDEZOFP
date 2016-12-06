<?php
$articles = Article::getAll();

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
    $htmlArticles .= '</div>';
  }
  echo $htmlArticles;

}
