<?php

class Article extends Classe {
  protected $id_article;
  protected $titre;
  protected $texte;
  protected $image;
  protected $dateCreation;

  /**
   * Article constructor.
   */
  public function __construct() {
    parent::__construct('Article', 'id_article', array('titre', 'texte', 'image'));
  }

  /**
   * @return mixed
   */
  public function getIdArticle()
  {
    return $this->id_article;
  }

  /**
   * @param mixed $id_article
   */
  public function setIdArticle($id_article)
  {
    $this->id_article = $id_article;
  }

  /**
   * @return mixed
   */
  public function getTitre()
  {
    return $this->titre;
  }

  /**
   * @param mixed $titre
   */
  public function setTitre($titre)
  {
    $this->titre = $titre;
  }

  /**
   * @return mixed
   */
  public function getTexte()
  {
    return $this->texte;
  }

  /**
   * @param mixed $texte
   */
  public function setTexte($texte)
  {
    $this->texte = $texte;
  }

  /**
   * @return mixed
   */
  public function getImage()
  {
    return $this->image;
  }

  /**
   * @param mixed $image
   */
  public function setImage($image)
  {
    $this->image = $image;
  }

  /**
   * @return mixed
   */
  public function getDateCreation()
  {
    return $this->dateCreation;
  }

  /**
   * @param mixed $dateCreation
   */
  public function setDateCreation($dateCreation)
  {
    $this->dateCreation = $dateCreation;
  }

}
