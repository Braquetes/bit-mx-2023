<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

require "../config/conexion.php";

$id = mysqli_real_escape_string($conexion,$_GET['id']);
$pdf = mysqli_real_escape_string($conexion,$_GET['pdf']);

$registros=mysqli_query($conexion,"UPDATE `usuarios` SET `pdf` = '".$pdf."' WHERE `usuarios`.`id_usuario` = '".$id."'");

class Result {}
$response = new Result( );

    if($registros){ 
        $response->resultado = 'PDF actualizado';
    }

echo json_encode($response); // MUESTRA EL JSON GENERADO
?>