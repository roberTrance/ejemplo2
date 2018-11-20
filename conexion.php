<?php

$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="agenda";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

$nombre = "ro";
$telefono = "34234";
$empresa = "fdfdffdh";


$query = "INSERT INTO contactos (nombre,telefono,empresa) VALUES (?,?,?)";



if ($stmt = $con->prepare($query)) {

    $stmt->bind_param("sss",$nombre, $telefono, $empresa);
    $stmt->execute();
    while ($stmt->fetch()) {
        printf("%s, %s, %s\n", $nombre, $telefono, $empresa);
    }
    $stmt->close();
}
?>