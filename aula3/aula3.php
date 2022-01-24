 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aula 3</title>
 </head>
 <body>
 
 <?php
  include_once 'caneta.php';
/*
$c1 = new Caneta();
$c1->setModelo("bic");
$c1->setPonta(0.5);
  
  print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} ";
*/

$c1 = new Caneta("bic","azul","0.5");

$c2 = new Caneta("macacona","rosa","0.7");

var_dump($c1, $c2);

 ?>

 </body>
 </html>