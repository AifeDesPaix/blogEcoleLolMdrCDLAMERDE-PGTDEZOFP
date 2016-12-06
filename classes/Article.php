<?php

class Article extends Classe {
  /** @var int */
  protected $id_article;
  /** @var int */
  protected $id_user;
  /** @var String */
  protected $titre;
  /** @var String */
  protected $texte;
  /** @var String */
  protected $image;
  /** @var Date */
  protected $dateCreation;
  /** @var boolean */
  protected $visible;

  /**
   * Article constructor.
   */
  public function __construct() {
    parent::__construct('Article', 'id_article', array('titre', 'id_user', 'texte', 'image'));
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

  /**
   * @return int
   */
  public function getIdUser()
  {
    return $this->id_user;
  }

  /**
   * @param int $id_user
   */
  public function setIdUser($id_user)
  {
    $this->id_user = $id_user;
  }

  /**
   * @return boolean
   */
  public function isVisible()
  {
    return $this->visible;
  }

  /**
   * @param boolean $visible
   */
  public function setVisible($visible)
  {
    $this->visible = $visible;
  }

  static public function getAll($limit = 10, $where = '') {
    if(!empty($where)) {
      $where .= ' AND ';
    }
    $where .= 'visible = true';
    return parent::getAll($limit, $where);
  }


}
