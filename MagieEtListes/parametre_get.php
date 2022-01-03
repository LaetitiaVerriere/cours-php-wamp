<?php

//Le parametre get est un tableau remplie des variables passées dans l'url par la methode GET
//Tel qu'a l'url : localhost/mon-fichier/index.php?variable=10
//J'aurais: 
$_GET["variable"];//Qui me renverrai 10

//Il est possible de chainer les variables
//Tel qu'a l'url : localhost/mon-fichier/index.php?variable=10&name=Celine
//J'aurai : 
$_GET["variable"];//Qui me renverrai 10
$_GET["name"];//Qui me renverrai Celine

?>