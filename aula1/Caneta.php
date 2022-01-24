<?php

class Caneta {

  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;

  function rabiscar() {
    if ($this->tampada == true) {
      echo "<p>Erro ! não posso rabiscar</p>";
    } else {
      echo "estou rabiscando";
    }
  
  }

  function tampar() {
 $this->tampada = true;
  }

  function destampar() {
  $this->tampada = false;
  }
}

?>