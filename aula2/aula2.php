<?php
/*
utilizando modificadores de visibilidade public, private e protected,e qual são seus efeitos.
*/
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aula 2</title>
 </head>
 <body>
 
 <?php 
 
 require_once'caneta.php';

 $c1 = new Caneta;
 $c1->modelo = "bic";
 $c1->cor = "rosa";

   //var_dump($c1);
 $c1->rabiscar(); //metodo publico, entao pode ser acessado
 //$c1->tampar(); metodo privado, então não pode ser acessado
 ?>

 </body>
 </html>