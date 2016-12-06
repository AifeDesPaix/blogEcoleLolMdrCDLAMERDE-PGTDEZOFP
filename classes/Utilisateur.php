<?php

class Utilisateur extends Classe
{
  protected $id_user;
  protected $nom;
  protected $mdp;
  protected $mail;

  /**
   * Utilisateur constructor.
   * @param $id_user
   * @param $nom
   * @param $mdp
   * @param $mail
   */
  public function __construct() {
    parent::__construct("Utilisateur", 'id_user', array('nom', 'mdp', 'mail'));
  }

  /**
   * @return mixed
   */
  public function getIdUser()
  {
    return $this->id_user;
  }

  /**
   * @param mixed $id_user
   */
  public function setIdUser($id_user)
  {
    $this->id_user = $id_user;
  }

  /**
   * @return mixed
   */
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * @param mixed $nom
   */
  public function setNom($nom)
  {
    $this->nom = $nom;
  }

  /**
   * @return mixed
   */
  public function getMdp()
  {
    return $this->mdp;
  }

  /**
   * @param mixed $mdp
   */
  public function setMdp($mdp)
  {
    $this->mdp = $mdp;
  }

  /**
   * @return mixed
   */
  public function getMail()
  {
    return $this->mail;
  }

  /**
   * @param mixed $mail
   */
  public function setMail($mail)
  {
    $this->mail = $mail;
  }

  public function loadByNameMdp($nom, $mdp) {
    $user = "SELECT * FROM utilisateur WHERE nom = '".$nom."' AND mdp = '".$mdp."' LIMIT 2";

    if(!$res = SPDO::getInstance()->query($user)) {
      throw new Exception("Mot de passe incorrect");
    }
var_dump($res);
    if($data = $res->fetch()) {
      $this->remplirViaArray($data);
      $this->setIsLoaded(true);
    } else {
      $this->setIsLoaded(false);
    }

    return$this->getIsLoaded();

  }

}
