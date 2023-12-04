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
       
        case 'agregar_propietario':
            agregar_propietario();
        break;

        case 'editar_panteon_municipal':
            editar_panteon_municipal();
        break;

        case 'eliminar_panteon_municipal':
            eliminar_panteon_municipal();
        break;
    }

}

function agregar_propietario(){

    global $conexion;
    extract($_POST);


    $consulta="INSERT INTO propietario (nombre_completo,sexo,fecha_nacimiento,edad,curp,celular,foto,correo,comprobante_domicilio)
    VALUES ('$nombre_completo','$sexo', '$fecha_nacimiento', '$edad', '$curp', '$celular', '$foto', '$correo', '$comprobante_domicilio');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../view/index.php");
}


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

function editar_panteon_municipal(){

    global $conexion;
    extract($_POST);
                
    $consulta="UPDATE sepulcro_panteon_municipal SET tipo_pago = '$tipo_pago', observacion = '$observacion' WHERE id_sepulcro_panteon_municipal = $id_sepulcro_panteon_municipal";

    mysqli_query($conexion, $consulta);
    header("Location: ../view/difuntos.php");
}

function eliminar_panteon_municipal(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id_sepulcro_panteon_municipal'];
    $consulta = "DELETE FROM `propietario` WHERE `id_sepulcro_panteon_municipal` = $id_sepulcro_panteon_municipal";
    mysqli_query($conexion, $consulta);
    header("Location: ../view/difuntos.php");
}