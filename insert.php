<?php
require ("conexion.php");
 $status = "";
$con=conectar();//variable que almacena la conexión ala base de datos
$name=$_REQUEST['name'];//capturar datos del formulario
$user=$_REQUEST['user'];
$pwd=$_REQUEST['pwd'];

$query="insert into user values ('$name','$user','$pwd')";

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