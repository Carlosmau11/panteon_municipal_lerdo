<?php

/**
 * Validacion de datos para poder iniciar sesion
 */
require_once ("../../app/model/db.php");
$correo=$_POST['nombre_usuario'];
$password=$_POST['contrasena'];
session_start();
$_SESSION['correo']=$correo;


$conexion=mysqli_connect("localhost","root","1234qwerty","syscopa");
$consulta="SELECT*FROM usuarios where usuario='$correo' and contrasena='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header('Location: ../view/index.php');


}else{
    
    header('location: ../../index.php');
    session_destroy();
}
?>