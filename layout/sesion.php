<?php

global $pdo, $URL;
session_start();
if (isset($_SESSION['sesion email'])){
//    echo "Si existe sesion de ".$_SESSION['sesion email'];
    $email_sesion = $_SESSION['sesion email'];
    $sql = "SELECT * FROM `tb_usuarios` WHERE `email`='$email_sesion'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($usuarios as $usuario){
    $nombres_sesion = $usuario['nombres'];
    }
}else{
echo "No existe sesion";
header("Location: '.$URL.'/login");
}
