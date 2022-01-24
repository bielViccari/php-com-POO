<?php 

class ContaBanco {
  
  public $numConta;

  protected $tipo;

  private $dono;

  private $saldo;

  private $status;

  public function __construct() {
     $this->setSaldo(0);
     $this->setStatus(false);
     echo "conta criada com sucesso <br>";
  }

  public function getNumConta() {
     return $this->numConta;
  }

  public function setNumConta($numConta) {
     $this->numConta = $numConta;
  }

  public function getTipo() {
   return $this->tipo;
  }

  public function setTipo($tipo) {
     $this->tipo = $tipo;
  }

  public function getDono() {
     return $this->dono;
  }

  public function setDono($dono) {
     $this->dono = $dono;
  }

  public function getSaldo() {
    return $this->saldo;
  }

  public function setSaldo($saldo) {
     $this->saldo = $saldo;
  }

  public function getStatus() {
    return $this->status;
  }

  public function setStatus($status) {
  $this->status = $status;
  }

  public function abrirConta($tipo) {
      $this->setTipo($tipo);
      $this->setStatus(true);

      if ( $tipo = "CC") {
        $this->setSaldo(50);
      } else if ($tipo = "CP") {
         $this->setSaldo(150);
      } 
  
    }

  public function fecharConta() {

    if ($this->saldo > 0) {
      echo "Conta com dinheiro";

    } else if ($this->saldo < 0) {
       echo "Conta em débito";
    } else if ($this->saldo == 0) {
       $this->setStatus(false);
    } 

  }

  public function depositar($v) {
    if ( $this->status == true) {
      $this->setSaldo($this->getSaldo() + $v);
    } else {
      echo "não foi possivel depositar o dinheiro";
    }
  }

  public function sacar($v) {
     if ($this->getStatus()) {
       if ($this->getSaldo() >= $v) {
         $this->setSaldo($this->getSaldo() - $v);
       } else {
         echo "não foi possivel sacar dinheiro.";
       }
     } else {
       echo "não posso sacar de uma conta fechada";
     }
  }

  public function pagarMensal() {
     
     if ( $this->getTipo() == "CC") {
       $v = 12 ;
     } else if ($this->getTipo() == "CP") {
       $v = 20;
     }

     if ($this->getStatus()) {
       if($this->getSaldo() > $v) {
         $this->setSaldo($this->getSaldo() - $v);
       } else {
         echo "impossivel pagar";
       }
     }

  }
}


?>