<?php
include('Conexion.php');//incluye el archivo php que contiene la conexion
$con=Conectar();//variable que almacena la conexión ala base de datos
$name=$_REQUEST['name'];//capturar codigo del formulario

$query="delete from user  where name='$name'";//consulta sql

$cierto=mysql_query($query,$con);//eliminandi

//preguntar si se ejecutó la consulta el dato
if(!$cierto){
echo "No se ha podido Eliminar";
}
else {
echo "Datos Eliminados Correctamente<br>";
echo "<a href='new2.html'>Regresar</a>";
}
?>