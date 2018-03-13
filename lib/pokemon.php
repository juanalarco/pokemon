<?php
/**
 *
 */
class Pokemon
{
  private $nombre="";
  private $tipo="";
  private $poder=0;

  function __construct($nombre,$tipo,$poder)
  {
    $this->nombre=$nombre;
    $this->tipo=$tipo;
    $this->poder=$poder;
  }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }
    public function getPoder()
    {
        return $this->poder;
    }
    public function setPoder($poder)
    {
        $this->poder = $poder;
        return $this;
    }

    //Hacemos una funcion para calcularPoder y hacemos un random
    public function calcularPoder(){
      $this->poder=rand(1,3000);
      return $this->poder;
    }

    //Hacemos una funcion para saber si es Legendario o no
    public function legendario(){
      if ($this->poder > 2500) {
        echo "<b>Pokemon Legendario</b> ";
      }else {
        echo "<b>Pokemon no Legendario</b> ";
      }
    }
}
 ?>
