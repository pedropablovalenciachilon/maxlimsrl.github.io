<?php

	include("conexion.php");
?>
<form action="" method="post">
	nombre:<input name="nombre"><br/>
	apellido:<input name="apellido"><br/>
	celular:<input name="celular"><br/>
	departamento:<input name="departamento"><br/>

	<input type="submit" />
	
</form>

<?php  

	if($_POST){
		
		$nombre=$_POST['nombre'];
		$ape=$_POST['apellido'];
		$cel=$_POST['celular'];
		$dep=$_POST['departamento'];

		mysqli_query($con,"INSERT INTO trabajadores (nombre, apellido, celular, departamento) values ('$nombre','$ape','$cel','$dep')") ;
		echo "<h2> dato guardado </h2> "; 
	
	}	
?>