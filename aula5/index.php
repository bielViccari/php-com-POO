<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encapsulamento</title>
</head>
<body>
  <h1>Projeto Controle remoto</h1>
  <?php
require_once 'ControleRemoto.php';
   
$c  = new ControleRemoto();
$c->ligar();
$c->abrirMenu();

  ?>
</body>
</html>