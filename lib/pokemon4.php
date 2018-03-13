<?php
/**
 *
 */
class Pokemon4 extends Pokemon
{
  private $rareza=0;
  //Creamos un construct y le pasamos las variables de pokemon3.php y le añadimos la nueva que es rareza
  function __construct($nombre,$tipo,$poder,$nivel,$vida,$rareza)
  {
        //Le pasamos las variables del pokemon anterior y le añadimos la nueva que es rareza
    parent::__construct($nombre,$tipo,$poder,$nivel,$vida);
    $this->rareza=$rareza;
  }


  public function getRareza()
  {
      return $this->rareza;
  }


  public function setRareza($rareza)
  {
      $this->rareza=$rareza;
      return $this;
  }

//Hacemos una funcion para random de rareza
  public function calcularRareza(){
    $this->rareza=rand(1,10);
    return $this->rareza;
  }

//Creamos una funcion para devolver un texto a una variables y asi no hacer echos en el index
  public function devolverRarezaTexto(){
    $textoRareza="";
    if ($this->rareza <= 3) {
      $textoRareza="Tu pokemon es común";
    }elseif ($this->rareza <= 6) {
      $textoRareza="Tu pokemon es raro";
    }else {
      $textoRareza="Tu pokemon es muy raro";
    }
    return $textoRareza;
  }
}
 ?>
