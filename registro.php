<?php
	$user = "root";
	$pass = "";
	$host = "localhost";
	 
	$connection =mysqli_connect($host,$user,$pass)
    

	//LLamamos a los inputs 
	$Nombres = $_POST["Nombres"]
	$Apellidos = $_POST["Apellidos"]
	$Correo = $_POST["Correo"]
	$Clave = $_POST["Clave"]

	if(!$connection){
		echo "No se ha podido conectar al servidor" . mysql_error();
	} else{
		echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
	}

	//indicamos el nombre de la base datos
	$datab = "formulario";
	//indicamos selecionar ala base datos
	$db = mysqli_select_db($connection,$datab);

	if (!$db)
	{
	echo "No se ha podido encontrar la Tabla";
	}
	else
	{
	echo "<h3>Tabla seleccionada:</h3>" ;
	}

	//insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
	$instruccion_SQL = "INSERT INTO usuarios (Nombre, Apellido, Correo, Contraseña)
	VALUES ('$nombre','$usuario','$contraseña')";
  
    $resultado = mysqli_query($connection,$instruccion_SQL);

?>