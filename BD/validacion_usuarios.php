<?php
include '../BD/conexion.php';
$nombre=$_POST['nombre'];
$contraseña=$_POST['contra'];
$consulta=("SELECT *FROM usuarios WHERE usuario='$nombre' AND contra='$contraseña'");
$validacion=mysqli_query($conexion,$consulta);


$fila=mysqli_num_rows($validacion);
if($fila>0){
	
	echo "<script>
     location.href='../menu_principal.html';

	</script>";
}
else {
	echo "<script>
    alert('usuario no registrado o contraseña incorrecta');
    location.href='../index.php';
	</script>";
}


?>