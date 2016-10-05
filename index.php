<?php

include ('grafoAsignatura.php');

$n = new Grafo();

$n->agregarVertice(new Vertice("A"));
$n->agregarVertice(new Vertice("B"));
$n->agregarVertice(new Vertice("C"));
$n->agregarVertice(new Vertice("D"));
$n->agregarVertice(new Vertice("H"));

$n->agregarArista("A","B",3);
$n->agregarArista("A","C",5);
$n->agregarArista("C","D",10);
$n->agregarArista("D","A",3);
$n->agregarArista("A","D",1);
$n->agregarArista("B","H",9);
$n->agregarArista("H","C",2);

echo "<b>Matriz Adyacencia:</b><br>";
print_r($n->getMatrizA());
echo "<hr>";




 ?>
