<?php

if(isset($_GET['id'])){
    require 'data.php';
    $cliente = new Data();
    $id = intval($_GET['id']);
    $res= $cliente->delete($id);
    session_start();
    if($res){
        
        $_SESSION['mensaje']= "Eliminado Correctamente";
    }else{
        $_SESSION['mensaje']= "El Cliente no Existe";
    }
    header("location:index.php");
}


?>