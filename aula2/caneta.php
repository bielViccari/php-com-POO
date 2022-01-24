<?php

class Caneta {

  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;

 public function rabiscar() {
    if ($this->tampada == true) {
      echo "<p>Erro ! não posso rabiscar</p>";
    } else {
      echo "estou rabiscando";
    }
  
  }

 public function tampar() {
 $this->tampada = true;
  }

 private function destampar() {
  $this->tampada = false;
  }
}

?>