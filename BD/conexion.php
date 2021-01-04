<?php
$host ='localhost';
$usuario='root';
$contra='';
$bd='cinema';
$conexion=mysqli_connect($host,$usuario,$contra,$bd);
if (!$conexion){
	echo "<script>
    alert('no se pudo establecer conexion con el servdor de bases de datos');
	</script>";
}



?>