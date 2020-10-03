<?php
include('Conexion.php');//incluye el archivo php que contiene la conexion
$con=conectar();//variable que almacena la conexión ala base de datos
if(isset($_REQUEST['Modificar'])){

$name=$_REQUEST['name'];
$user=$_REQUEST['user'];
$pwd=$_REQUEST['pwd'];


$queryi="UPDATE user SET user='$user',pwd='$pwd' where name='$name'";//consulta sql

$val=mysql_query($queryi,$con);//ejecutando consulta

if(!$val){
echo "No se ha podido Modificar";
echo "<a href='modifica.html'>Regresar</a>";
}
else {
echo "Datos Modificados Correctamente<br><br>";
echo "<a href='modifica.html'>Regresar</a>";
}
}
?>