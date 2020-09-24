<?php
    require '../database/database.php';


$accion=(isset($_GET['action']))?$_GET['action']:'leer'

switch($accion){
    case 'agregar';
        echo "instruccion agregar";
        break;
    case 'eliminar';
        echo "instruccion eliminar";
        break;   
    case 'modificar'
        echo "instruccion modificar";
        break;
default:
//seleccionar eventosdel calendario 
$sentenciaSQL= $pdo->prepare("SELECT * FROM eventos");
$sentenciaSQL->execute();

$resultado= $sentenciaSQL->fetchAll(PDO::fetch_ASSOC);
echo json_decode($resultado);
}
?>