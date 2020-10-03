<?php
require ("conexion.php");
 $status = "";
$con=conectar();//variable que almacena la conexión ala base de datos
$codigo=$_REQUEST['cod'];//capturar datos del formulario
$descripcion=$_REQUEST['des'];
$precio=$_REQUEST['pr'];

$query="insert into articulos values ('$codigo','$descripcion','$precio')";// cambiar tabla

$cierto=mysql_query($query,$con);//insertar

//preguntar si se insertó el dato
if(!$cierto){
echo "No se ha podido guardar";
}
else {
echo "Datos Guardados Correctamente<br>";
echo "<a href='new.html'>Regresar</a>";
}
?>