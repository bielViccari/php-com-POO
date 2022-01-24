<?php

//cada um tem de abrir uma conta, conta corrente e conta poupança

//ele pega 300 reais e deposita em uma conta poupança

//ela deposita na conta corrente 500 reais

//ela saca 100 reais


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio</title>
</head>
<body>
  <?php
   require_once 'banco.php';

   $p1 = new ContaBanco();
   $p1->abrirConta("CC");
   $p1->setDono("cleitin");
   $p1->setNumConta("111");
   $p1->depositar(300);
   $p1->pagarMensal();
   $p1->sacar(338);
   $p1->fecharConta();

   $p2 = new ContaBanco();
   $p2->abrirConta("CP");
   $p2->setDono("creuza");
   $p2->setNumConta("222");
   $p2->depositar(500);
   $p2->sacar(550);
   $p2->pagarMensal();
   $p2->fecharConta();
   var_dump($p1);

   var_dump($p2);

  ?>
</body>
</html>