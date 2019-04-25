<?php
    include 'Conexion.php';

    $conexion = OpenCon();

    $email = $_POST['email'];
    $nombre = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $registrar = "INSERT INTO usuarios (email, nombre, contrasena, imgperfil) values 
            ('$email', '$nombre', '$contrasena', 'null')";

    if(mysqli_query($conexion, $registrar) === true){
        header('Location: iniciarsesion.php');
    }else{
        header('Location: registrarse.html');
    }

    CloseCon($conexion);
    