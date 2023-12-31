<?php

require_once ("db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){

        case 'agregar_difunto':
            agregar_difunto();
        break;

        case 'eliminar_difunto':
            eliminar_difunto();
        break;

        case 'editar_difunto':
            editar_difunto();
        break;

        case 'editar_propietario':
            editar_propietario();
        break;

        case 'eliminar_propietario':
            eliminar_propietario();
        break;
       
        case 'agregar_propietario':
            agregar_propietario();
        break;

        case 'agregar_panteon_municipal':
            agregar_panteon_municipal();
        break;

        case 'editar_panteon_municipal':
            editar_panteon_municipal();
        break;

        case 'eliminar_panteon_municipal':
            eliminar_panteon_municipal();
        break;

        case 'agregar_panteon_jardin':
            agregar_panteon_jardin();
        break;
        
        case 'editar_panteon_jardin':
            editar_panteon_jardin();
        break;

        case 'eliminar_panteon_jardin':
            eliminar_panteon_jardin();
        break;

        case 'editar_servicios':
            editar_servicios();
        break;

        case 'eliminar_servicios':
            eliminar_servicios();
        break;
    }

}

function agregar_difunto(){

    global $conexion;
    extract($_POST);


    $consulta="INSERT INTO difuntos (nombre, sexo, fecha)
    VALUES ('$nombre', '$sexo', '$fecha');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../view/Difunt.php");
}

function editar_difunto(){

    global $conexion;
    extract($_POST);
                
    $consulta="UPDATE difuntos SET nombre = '$nombre', sexo = '$sexo', fecha = '$fecha' WHERE id_difuntos = $id_difuntos";

    mysqli_query($conexion, $consulta);
    header("Location: ../view/Difunt.php");
}

function eliminar_difunto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id_difuntos'];
    $consulta = "DELETE FROM `difuntos` WHERE `id_difuntos` = $id_difuntos";
    mysqli_query($conexion, $consulta);
    header("Location: ../view/Difunt.php");
}


function agregar_propietario(){

    global $conexion;
    extract($_POST);

    $tamanoArchvio=$_FILES['foto']['size'];
    $tamanoArchvio2=$_FILES['comprobante_domicilio']['size'];

    
    //se realiza la lectura de la imagen
            $imagenSubida=fopen($_FILES['foto']['tmp_name'], 'r');
            $binariosImagen=fread($imagenSubida,$tamanoArchvio);
    
    //se realiza la consulta correspondiente para guardar los datos
    
    $imagenFin =mysqli_escape_string($conexion,$binariosImagen);

    $imagenSubida2=fopen($_FILES['comprobante_domicilio']['tmp_name'], 'r');
    $binariosImagen2=fread($imagenSubida2,$tamanoArchvio2);

    $imagenFin2 =mysqli_escape_string($conexion,$binariosImagen2);


    $consulta="INSERT INTO propietario (nombre_completo,sexo,fecha_nacimiento,edad,curp,celular,foto,correo,comprobante_domicilio)
    VALUES ('$nombre_completo','$sexo', '$fecha_nacimiento', '$edad', '$curp', '$celular', '$imagenFin', '$correo', '$imagenFin2');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../view/index.php");
}


function editar_propietario(){

    global $conexion;
    extract($_POST);

    $tamanoArchvio=$_FILES['foto']['size'];
    $tamanoArchvio2=$_FILES['comprobante_domicilio']['size'];

    
    //se realiza la lectura de la imagen
            $imagenSubida=fopen($_FILES['foto']['tmp_name'], 'r');
            $binariosImagen=fread($imagenSubida,$tamanoArchvio);
    
    //se realiza la consulta correspondiente para guardar los datos
    
    $imagenFin =mysqli_escape_string($conexion,$binariosImagen);

    $imagenSubida2=fopen($_FILES['comprobante_domicilio']['tmp_name'], 'r');
    $binariosImagen2=fread($imagenSubida2,$tamanoArchvio);

    $imagenFin2 =mysqli_escape_string($conexion,$binariosImagen2);
                
    $consulta="UPDATE propietario SET nombre_completo = '$nombre_completo', sexo = '$sexo', fecha_nacimiento = '$fecha_nacimiento', edad = '$edad', curp ='$curp', celular = '$celular', foto = '$imagenFin', correo = '$correo', comprobante_domicilio = '$imagenFin2' WHERE id_propietario = $id_propietario";

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


function agregar_panteon_municipal(){

    global $conexion;
    extract($_POST);


    $consulta="INSERT INTO sepulcro_panteon_municipal (id_propietario,id_difunto,tipo_pago,observacion)
    VALUES ('$id_propietario', '$id_difunto', '$tipo_pago', '$observacion');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../view/difuntos.php");
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

function agregar_panteon_jardin(){

    global $conexion;
    extract($_POST);


    $consulta="INSERT INTO sepulcro_panteon_jardin (id_propietario,id_difunto,tipo_pago, calle, etapa, letra, lote, observacion)
    VALUES ('$id_propietario', '$id_difunto', '$tipo_pago','$calle', '$etapa', '$letra', '$lote', '$observacion');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../view/PanteonJardin.php");
}

function editar_panteon_jardin(){

    global $conexion;
    extract($_POST);
                
    $consulta="UPDATE sepulcro_panteon_jardin SET tipo_pago = '$tipo_pago', calle = '$calle', etapa = '$etapa', letra = '$letra', lote = '$lote', observacion = '$observacion'  WHERE id_sepulcro_panteon_jardin = $id_sepulcro_panteon_jardin";

    mysqli_query($conexion, $consulta);
    header("Location: ../view/PanteonJardin.php");
}

function eliminar_panteon_jardin(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id_sepulcro_panteon_jardin'];
    $consulta = "DELETE FROM `sepulcro_panteon_jardin` WHERE `id_sepulcro_panteon_jardin` = $id_sepulcro_panteon_jardin";
    mysqli_query($conexion, $consulta);
    header("Location: ../view/PanteonJardin.php");
}

function editar_servicios(){

    global $conexion;
    extract($_POST);
                
    $consulta="UPDATE servicios SET boleta = '$boleta', mes = '$mes', fecha = '$fecha', panteon = '$panteon', datos_complementarios = '$datos_complementarios' WHERE id_servicios = $id_servicios";

    mysqli_query($conexion, $consulta);
    header("Location: ../view/Servicios.php");
}

function eliminar_servicios(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id_servicios'];
    $consulta = "DELETE FROM `servicios` WHERE `id_servicios` = $id_servicios";
    mysqli_query($conexion, $consulta);
    header("Location: ../view/Servicios.php");
}