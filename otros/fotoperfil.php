<?php

if(isset($_FILES['file'])){
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    $uploadfolder = "../assets/images/";

    

    if(move_uploaded_file($file_tmp, $uploadfolder.$file_name)){
        $conexion = new Conexion();
        $username = $_SESSION['username'];

        $query = "update fileUploads set url = '$add' where username = '$username'";

        $sentencia = mysqli_prepare($conexion,$consulta);
        

        if (mysqli_stmt_execute($sentencia)) {
            header('Location: perfil.php');
        }
    

}