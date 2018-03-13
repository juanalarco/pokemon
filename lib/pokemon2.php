<?php
/**
 *
 */
class Pokemon2 extends Pokemon
{
  private $nivel=0;

  //Hacemos el construct y pasamos las variables de pokemon.php y la nueva que es nivel
  function __construct($nombre,$tipo,$poder,$nivel)
  {
    //Le pasamos las variables del pokemon anterior y le añadimos la nueva que es nivel
    parent::__construct($nombre,$tipo,$poder);
    $this->nivel=$nivel;
  }
    public function getNivel()
    {
        return $this->nivel;
    }
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
        return $this;
    }

    //Hacemos un random de nivel
    public function calcularNivel(){
      $this->nivel=rand(1,100);
      return $this->nivel;
    }
}
 ?>
