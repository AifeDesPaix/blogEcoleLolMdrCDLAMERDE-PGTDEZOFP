<?php

class Classe {
  /** @var  [] */
  private $cols;
  /** @var  String */
  private $isLoaded;
  /** @var  String */
  private $pk;
  /** @var  String */
  private $className;

  /**
   * Classe constructor.
   * @param $className
   */
  public function __construct($className, $pk, $cols) {
    $this->className = $className;
    $this->pk = $pk;
    $this->isLoaded = false;
    $this->cols = $cols;
  }

  /**
   * @return String
   */
  public function getClasseName()
  {
    return $this->className;
  }

  /**
   * @param String $className
   */
  public function setClasseName($className)
  {
    $this->className = $className;
  }


  public function loadByPK($pk) {

    $user = "SELECT ".implode(', ', $this->cols)." FROM ".$this->className." WHERE ".$this->pk." = '".$pk."'";

    if(!$res = SPDO::getInstance()->query($user)) {
      throw new Exception("Mot de passe incorrect");
    }
    if($obj = $res->fetch()) {
      $this->remplirViaArray($obj);
      $this->isLoaded = true;
    } else {
      $this->isLoaded = false;
    }

    return $this->isLoaded;
  }

  protected function remplirViaArray($dbResult) {
    foreach ($dbResult as $key => $value) {
      if(!is_int($key)) {
        $this->$key = $value;
      }
    }
    $this->isLoaded = true;
  }

  public function save() {
    return $this->isLoaded ? $this->update() : $this->insert();
  }

  private function insert() {
    $req = 'INSERT INTO '.$this->className.' ';

    $req .= '(';
    foreach ($this->cols as $col) {
      $req .= $col.', ';
    }
    $req = substr($req, 0, -2);
    $req .= ') ';

    $req .= 'values ';

    $req .= '(';
    foreach ($this->cols as $col) {
      $req .= "'".$this->$col."', ";
    }
    $req = substr($req, 0, -2);
    $req .= ')';

    return SPDO::getInstance()->query($req);
  }

  private function update() {
    // todo
    throw new Exception('Update détécté à TODO');
  }

  /**
   * @return mixed
   */
  public function getIsLoaded()
  {
    return $this->isLoaded;
  }

  /**
   * @param mixed $isLoaded
   */
  protected function setIsLoaded($isLoaded)
  {
    $this->isLoaded = $isLoaded;
  }

  static public function getAll($limit = 10, $where = '') {
    $objets = [];
    $req = 'SELECT * FROM '.get_called_class().' ';

    if(!empty($where)) {
      $req .= 'WHERE '.$where.' ';
    }
    $req .= ' LIMIT '.$limit.' ';

    var_dump($req);
    $res = SPDO::getInstance()->query($req);

    if(!$res) {
      throw new Exception("Requete Echoue");
    }
    try {
      while ($val = $res->fetch()) {
        $classe = get_called_class();
        /** @var Classe $unite */
        $unite = new $classe();
        $unite->setIsLoaded( $unite->remplirViaArray($val) );
        $objets[] = $unite;
      }
    } catch (Exception $e) {

    }

    return $objets;
  }

  public function delete() {
    var_dump(get_called_class());
    $pk = $this->pk;
    var_dump($pk);
    var_dump($this);
//    $req = 'DELETE FROM '.get_called_class().' WHERE '.$this->pk.' = '.$this->($this->pk);
//    var_dump($req);
//    SPDO::getInstance()->query($req);
  }

}
