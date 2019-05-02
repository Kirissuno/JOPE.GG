<?php
    include 'Conexion.php';
    session_start();
    if (isset($_POST['iniciarsesion'])){
        $conexion = OpenCon();
        $email = strtolower($_POST['email']);
        $contrasena = $_POST['contrasena'];
        
        echo $email."   ".$contrasena."<br>";
    
        $consulta = "SELECT email, nombre, contrasena, imgperfil from usuarios where email like '$email' and contrasena like '$contrasena'";
    
        if($sentencia = mysqli_prepare($conexion,$consulta)){
            mysqli_stmt_execute($sentencia);
    
            mysqli_stmt_bind_result($sentencia, $emailbd, $nombrebd, $contrasenabd, $imgperfilbd);
        
            while (mysqli_stmt_fetch($sentencia)) {
                $datos = $emailbd." ".$nombrebd." ".$contrasenabd." ".$imgperfilbd;
            }
            $campos = explode(" ", $datos);
    
            if ($email == $campos[0] && $contrasena == $campos[2]){
                $_SESSION["email"] = $campos[0];
                $_SESSION["usuario"] = $campos[1];
                $_SESSION["contrasena"] = $campos[2];
                $_SESSION["img"] = $campos[3];
                header ('Location: perfil.php');
            }else{
                $_SESSION["error"] = 1;
                header('location:iniciarsesion.php');
            }
            mysqli_stmt_close($sentencia);
        }
        
        CloseCon($conexion);
    }
    