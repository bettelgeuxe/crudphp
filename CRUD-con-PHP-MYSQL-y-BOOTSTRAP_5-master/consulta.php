<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="css/estilos.css" rel="stylesheet" type="text/css">

</head>

	<!-- Inicio del encabezado -->
	
<header>
	<nav>
		
		<!-- Encabezado para menú responsivo-->
					
         <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
           </label>
		
		<!-- Logo-->
		
          <a href="index.html" class="enlace">
            <img src="img/logo.png" alt="Sistema de Bibliotecas" class="logo">
		 </a>                
		
		<!--Menú-->
		
		<ul>
          <li><a href="index.html">Inicio</a></li>
        <li><a class="active" href="#">Usuarios</a></li>
        <li><a href="prestamos.html">Prestamos</a></li>
		<li><a href="login.html">Salir</a></li>  
      </ul>
	</nav>
    
</header>	
	
	<!-- Inicio del cuerpo -->
	
 <body class="login-img-body"> <!-- Imagen de fondo-->	
	 
	 <!-- Imagen de Formulario-->	
	
	<div class="container">
		<div id="header">
			<ul class="nav1">
				<li><a href="listado.php">Listado</a></li>
				<li><a href="form_registro.html">Registrar</a></li>
				<li><a class="active" href="form_consultar.html">Consultar</a></li>
				<li><a href="form_modificar.html">Modificar</a></li>
				<li><a href="form_eliminar.html">Eliminar</a></li>
			</ul>
		</div>
	<form class="formulario_1" method="GET">
		<input type="text" class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar" name="busqueda"><br> 
		<button class="btn btn-outline-info" type="submit" name="enviar"> <b>Buscar </b></button>
		<hr>
	</form>	

	
	
	<?php 
	$conexion=mysqli_connect("localhost","root","","crud_php");
	$where="";
	

	if(isset($_GET['enviar'])){
		$busqueda = $_GET['busqueda'];

		if(isset($_GET['busqueda'])){
			$where = "WHERE namefull LIKE'%".$busqueda."%' OR cedula LIKE'%".$busqueda."%'";
		}
	}
	?>	

<br>
	<table class="table table-striped table-dark table_id">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Cedula</th>
				<th>Genero</th>
				<th>Sección</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
		<?php

$conexion=mysqli_connect("localhost","root","","crud_php");               
$SQL="SELECT table_alumnos.id, table_alumnos.namefull, table_alumnos.cedula, table_alumnos.sexo, table_alumnos.section,
table_alumnos.foto, table_alumnos.fechaRegistro FROM table_alumnos
$where";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['namefull']; ?></td>
<td><?php echo $fila['cedula']; ?></td>
<td><?php echo $fila['sexo']; ?></td>
<td><?php echo $fila['section']; ?></td>
<td><?php echo $fila['fechaRegistro']; ?></td>





		<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>

</tbody>


	</table>


	
				  
		  
      
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


	<!-- Inicio del pie de página -->

<footer>
	<div class="flex-container">
 		<div class="flex-item"><a href="#">Proyecto ADSI - SENA</a></div>
		<div class="flex-item">Sistemas M.F. &copy; 2022 Todos los derechos reservados</div>
  		<div class="flex-item">
				<a href="#"><img src="img/facebook.png" width="40" height="40" alt="facebook"></a>
				<a href="#"><img src="img/youtube.png" width="40" height="40" alt="youtube"></a>
				<a href="#"><img src="img/linkedin.png" width="40" height="40" alt="linkedin"></a>
				<a href="#"><img src="img/wapp.png" width="40" height="40" alt="whatsapp"></a>
		</div>
	</div>
</footer>
</html>
