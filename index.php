<?php
  include "./lib/pokemon.php";
  include "./lib/pokemon2.php";
  include "./lib/pokemon3.php";
  include "./lib/pokemon4.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>POKEMON</title>
  </head>
  <body>

    <?php
    //Creamos nuevo objeto y ponemos tantos 0 como variables
      $pokemon= new Pokemon(0,0,0);
      $pokemon->setNombre("Magijuan");
      $devolverNombre=$pokemon->getNombre();
      $pokemon->setTipo("Agua");
      $devolverTipo=$pokemon->getTipo();
      $devolverPoder=$pokemon->getPoder();
      $poder=$pokemon->calcularPoder();

      echo "<b>POKEMON 1</b>";
      echo "<br>";
      echo "<br>";
      echo "Nombre: <b>".$devolverNombre."</b>";
      echo "<br>";
      echo "Tipo:<b> ".$devolverTipo."</b>";
      echo "<br>";
      echo "Tu pokemon tiene:<b> ".$poder."</b> de poder.";
      echo "<br>";
      $legendario=$pokemon->legendario();


  //Creamos nuevo objeto y ponemos tantos 0 como variables
      $pokemon2= new Pokemon2 (0,0,0,0);
      $pokemon2->setNombre("Juanchamp");
      $devolverNombre=$pokemon2->getNombre();
      $pokemon2->setTipo("Lucha");
      $devolverTipo=$pokemon2->getTipo();
      $devolverPoder=$pokemon2->getPoder();
      $poder=$pokemon2->calcularPoder();
      $nivel=$pokemon2->calcularNivel();

      echo "<br><br>";
      echo "<b>POKEMON 2</b>";
      echo "<br>";
      echo "<br>";
      echo "Nombre: <b>".$devolverNombre."</b>";
      echo "<br>";
      echo "Tipo:<b> ".$devolverTipo."</b>";
      echo "<br>";
      echo "Tu pokemon tiene:<b> ".$poder."</b> de poder.";
      echo "<br>";
      echo "Nivel: <b>".$nivel."</b>";


  //Creamos nuevo objeto y ponemos tantos 0 como variables
      $pokemon3= new Pokemon3 (0,0,0,0,0);
      $pokemon3->setNombre("Rynouan");
      $devolverNombre=$pokemon3->getNombre();
      $pokemon3->setTipo("Tierra");
      $devolverTipo=$pokemon3->getTipo();
      $devolverPoder=$pokemon3->getPoder();
      $vida=$pokemon3->calcularVida();
      $poder=$pokemon3->calcularPoder();

      echo "<br><br>";
      echo "<b>POKEMON 3</b>";
      echo "<br>";
      echo "<br>";
      echo "Nombre: <b>".$devolverNombre."</b>";
      echo "<br>";
      echo "Tipo:<b> ".$devolverTipo."</b>";
      echo "<br>";
      echo "Tu pokemon tiene:<b> ".$poder."</b> de poder.";
      echo "<br>";
      echo "Salud: <b>".$vida."</b>";


  //Creamos nuevo objeto y ponemos tantos 0 como variables
      $pokemon4= new Pokemon4 (0,0,0,0,0,0);
      $pokemon4->setNombre("Juansur");
      $devolverNombre=$pokemon4->getNombre();
      $pokemon4->setTipo("Planta");
      $devolverTipo=$pokemon4->getTipo();
      $devolverPoder=$pokemon4->getPoder();
      $poder=$pokemon4->calcularPoder();
      $rareza=$pokemon4->calcularRareza();

      echo "<br><br>";
      echo "<b>POKEMON 4</b>";
      echo "<br>";
      echo "<br>";
      echo "Nombre: <b>".$devolverNombre."</b>";
      echo "<br>";
      echo "Tipo:<b> ".$devolverTipo."</b>";
      echo "<br>";
      echo "Tu pokemon tiene:<b> ".$poder."</b> de poder.";
      echo "<br>";
      echo "Rareza: <b>".$rareza."</b> ".$pokemon4->devolverRarezaTexto();
      echo "<br>";
  ?>
  <!-- Scar un getter sin hacer un echo -->
  <hr>
      <?=$pokemon2->getNombre()?>
<hr>
  </body>
</html>
