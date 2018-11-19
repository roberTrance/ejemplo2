<?php
$diametro = $_POST['.nombre'];
$altura = $_POST['.no'];
$radio = $diametro/2;
$pi = 3.141593;
$volumen = $pi*$radio*$altura;
echo <br> &nbsp;El volumen ".$volumen";
?>