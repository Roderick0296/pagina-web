<?php
	//conectamos con el servidor
	$conectar=mysqli_connect("localhost","root","");
	//verificamos la conexion
	if(!$conectar){
		echo "No se pudo conectar con el servidor";
	}else {
		$base=mysqli_select_db($conectar,"zapateria");
		if(!$base){
			echo "No se encontro la base de datos";
		}
	}
	//recuperar variales
	
	$idcliente=$_POST['idcliente'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	
	//hacemos la secuencia sql
	$sql= "INSERT INTO cliente (idcliente, nombre, apellido) VALUES('$idcliente', '$nombre', '$apellido')";

	//ejecutar la sentencia sql
	if (mysqli_query($conectar, $sql)){
		echo "Datos Guardados correctamente <br><a href='pagina.html'>Volver</a>";
	}else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conectar);
	}
?>
