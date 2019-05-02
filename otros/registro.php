<?php
    include_once 'Conexion.php';
    
    

    if(isset($_POST["enviarregistro"])){
        

        $conexion = OpenCon();
        $email = strtolower($_POST['email']);
        $nombre = $_POST['usuario'];
        $rutaimg = '../assets/images/profile.png';
        $contrasena = $_POST['contrasena'];

        $registrar = "INSERT INTO usuarios (email, nombre, contrasena, imgperfil) values 
            ('$email', '$nombre', '$contrasena', '$rutaimg')";

        if(mysqli_query($conexion, $registrar) === true){
            header('Location: iniciarsesion.php');
        }else{
            header('Location: registrarse.php?error=1');
        }
        CloseCon($conexion);
    }
    