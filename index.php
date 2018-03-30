<?php
$enviado = false;
if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $option = $_POST['option'];
    $enviado = ["nombre" => $nombre , "option"=>$option];  
    #$enviado = 'Tu nombre es: '.$nombre.' y eres el Gamer'.$option; 
}

require 'index.view.php';
?>