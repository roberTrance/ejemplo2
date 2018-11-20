<?php
$diametro = $_POST['.nombre'];
$altura = $_POST['.no'];
$radio = $diametro/2;
$pi = 3.141593;
$volumen = $pi*$radio*$altura;
echo <br> &nbsp;El volumen ".$volumen";

$query = "INSERT INTO contactos (nombre, telefono, empresa) VALUES ('Juan','Garcia Pérez' ,'te')";

$nombre = $_POST['#nombre']


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($field1, $field2);
    while ($stmt->fetch()) {
        //printf("%s, %s\n", $field1, $field2);
    }
    $stmt->close();
}
?>