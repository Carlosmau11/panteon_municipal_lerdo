<?php

require_once ("db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){

        case 'editar_propietario':
            editar_propietario();
        break;

       
    }

}


function editar_propietario(){

    global $conexion;
    extract($_POST);
                
    $consulta="UPDATE propietario SET nombre_completo = '$nombre_completo', sexo = '$sexo', fecha_nacimiento = '$fecha_nacimiento', edad = '$edad', curp ='$curp', celular = '$celular', foto = '$foto', correo = '$correo', comprobante_domicilio = '$comprobante_domicilio' WHERE id_propietario = $id_propietario";

    mysqli_query($conexion, $consulta);
    header("Location: ../view/index.php");
}