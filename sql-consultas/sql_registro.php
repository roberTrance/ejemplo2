<?php

if($_POST['accion']== 'crear'){

    require_once('../conexion.php');

    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
    $empresa = filter_var($_POST['empresa'], FILTER_SANITIZE_STRING);

    try{

        $stmt = $conn->prepare("INSERT INTO contactos (nombre,telefono,empresa) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $telefono,$empresa );
        $stmt->execute();
        $respuesta = array(
            'respuesta' => 'correcto',
            'info' => $stmt
        );
        $stmt->close();
        $conn->close();


    } catch(Exception $e) {

        $respuesta = array (
            'error' => $e->getMessage()
        );

    }
    echo json_encode($respuesta);
}
