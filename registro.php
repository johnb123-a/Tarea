<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("motoresrespuestos",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$Num_Identificacion = $_POST['Num_Identificacions'];
	$Nombre = $_POST['Nombres'];
	$Correo = $_POST['Correos'];
	$clave = $_POST['claves'];
	

	//Obtiene la longitus de un string
	$req = (strlen($Num_Identificacion)*strlen($Nombre)*strlen($Correo)*strlen($clave)) or die("No se han llenado todos los campos");



	

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO registrate VALUES('$Num_Identificacion','$Nombre','$Correo','$clave')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'


?>