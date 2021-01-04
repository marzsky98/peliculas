<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/logo.ico">
	<title>
		PiraFlix
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/personal.css">
</head>
<body>

<br>
<br>
<br>
<br>


<center>
	
	<table>
		
		<form action="BD/validacion_usuarios.php" method="POST">
			<tr>
				<td>
					<center><img src="img/logo.png" height="150" width="190"></center>
				</td>
			</tr>
			<tr>
			<td>	
			<input class="form-control" type="text" name="nombre" placeholder="Nombre De Usuario">
			</td>
			</tr>
			<br>
			<tr>
			<td>	
			<input class="form-control" type="password" name="contra" placeholder="Contraseña">
		    </td>
		    </tr>
		    <tr>
		    	<td>
		    <center><input class="btn btn-danger" type="submit" name="enviar" value="Iniciar Sesion"></center>
		    </td>
		    </tr>
		    <tr>
		    	<td>
		    		<input type="checkbox" name="seleccion" >
		    		<label>Recordar Usuario</label>
		    	</td>
		    </tr>
		</form>
	</table>
</center>


</body>
</html>