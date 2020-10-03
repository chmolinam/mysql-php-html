<?php
include('Conexion.php');//incluye el archivo php que contiene la conexion
$con=conectar();//variable que almacena la conexión ala base de datos
if(isset($_REQUEST['buscar'])){
$name=$_REQUEST['name'];
$query="select * from user where name='$name'";
$cierto=mysql_query($query,$con);//ejecutando consulta


if(!$cierto){
echo "No existe!";
echo "<a href='modifica.html'>Regresar</a>";
}else
{
if($row=mysql_fetch_array($cierto)){
echo "<form action='modificardatosfinal.php' method='post'>
<input type='text' name='name' value='$row[name]'>
<input type='text' name='user' value='$row[user]'>
<input type='text' name='pwd' value='$row[pwd]'>
<input type='submit' name='Modificar' value='Modificar'>
</form>";
echo "<a href='modifica.html'>Regresar</a>";
}
else{
echo "No existe!";
echo "<a href='modifica.html'>Regresar</a>";
}
}
}
?>
