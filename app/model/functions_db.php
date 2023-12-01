<?php

require_once ("db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){

        case 'editar_propietario':
            editar_propietario();
        break;

        case 'eliminar_propietario':
            eliminar_propietario();
        break;
       
    }

}

// function insertar_accesorio(){

//     global $conexion;
//     extract($_POST);


//     $consulta="INSERT INTO TecnologiaAccesorios (tipo_conexion,nombre_dispositivo,descripcion)
//     VALUES ('$tipo_conexion','$nombre_dispositivo', '$descripcion');" ;

//     mysqli_query($conexion, $consulta);
    
//     header("Location: ../views/usuarios/tecnologia_accesorios.php");

// }


function editar_propietario(){

    global $conexion;
    extract($_POST);
                
    $consulta="UPDATE propietario SET nombre_completo = '$nombre_completo', sexo = '$sexo', fecha_nacimiento = '$fecha_nacimiento', edad = '$edad', curp ='$curp', celular = '$celular', foto = '$foto', correo = '$correo', comprobante_domicilio = '$comprobante_domicilio' WHERE id_propietario = $id_propietario";

    mysqli_query($conexion, $consulta);
    header("Location: ../view/index.php");
}


function eliminar_propietario(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id_propietario'];
    $consulta = "DELETE FROM `propietario` WHERE `id_propietario` = $id_propietario";
    mysqli_query($conexion, $consulta);
    header("Location: ../view/index.php");
}