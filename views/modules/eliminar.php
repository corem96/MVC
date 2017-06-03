<?php
    
session_start();

if(!$_SESSION["inicio"])
{
    header("location:index.php?action=login");
    
    exit();
}

$idUsuario = $_GET["id"];

$controller = new MvcController();
$resultado = $controller->eliminaUsuarioController($idUsuario);

echo $resultado;
    
?>