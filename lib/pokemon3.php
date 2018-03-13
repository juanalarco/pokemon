<?php
/**
 *
 */
class Pokemon3 extends Pokemon
{
  private $vida=0;
  //Creamos un construct y le pasamos las variables de pokemon2.php y le añadimos la nueva que es vida
  function __construct($nombre,$tipo,$poder,$nivel,$vida)
  {
      //Le pasamos las variables del pokemon anterior y le añadimos la nueva que es vida
    parent::__construct($nombre,$tipo,$poder,$nivel);
    $this->vida=$vida;
  }
  public function getVida()
  {
      return $this->vida;
  }
  public function setVida($vida)
  {
      $this->vida = $vida;
      return $this;
  }

  //Hacemos un random para calcular la vida 
  public function calcularVida(){
    $this->vida=rand(10,400);
    return $this->vida;
  }
}
 ?>
