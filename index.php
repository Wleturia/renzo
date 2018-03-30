<?php
$enviado = false;
if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $option = $_POST['option'];
    $enviado = ["nombre" => $nombre , "option"=>$option];  
}

require 'index.view.php';
?>