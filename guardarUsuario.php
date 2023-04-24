<?php
    $Nombre=$_POST['Nombre'];
    $Correo=$_POST['Correo'];
    $Clave=$_POST['Clave'];
    $Telefono=$_POST['Telefono'];
    $Estado=$_POST['Estado'];
    $Municipio=$_POST['Municipio'];
    $Colonia=$_POST['Colonia'];
    $CodigoPostal=$_POST['CodigoPostal'];

    if (!empty($Nombre)&&!empty($Correo)&&!empty($Clave)&&!empty($Telefono)&&!empty($Estado)&&!empty($Municipio)&&!empty($Colonia)&&!empty($CodigoPostal)){
        require_once'Models/usuario.php';
        $Usuario=new Usuario();
        $resultado=$Usuario->CrearUsuario ($Nombre,$Correo,$Clave,$Telefono,$Estado,$Municipio,$Colonia,$CodigoPostal);
        if ($resultado){
            header("Location:index.php");
        }
        else {
            header ("Location:registro.php"); 
        }
    }
    else {
        header("Location:registro.php");
    }
?>