<?php

	$servidor="localhost";
	$usuario="root";
	$clave="";
	$base="personas";
	$con = mysqli_connect($servidor,$usuario,$clave,$base);
	if(!$con){
		echo "error a la conexion base de datos";
	}
	else{
		echo"conexion a la base de datos";
	}
	
?>