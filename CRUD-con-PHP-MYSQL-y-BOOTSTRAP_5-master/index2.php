<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Listado</title>
  
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
	
	<div class="container formulario_1">
    <div id="header">
    <ul class="nav1">
				<li><a class="active" href="listado.php">Listado</a></li>
				<li><a href="registrar.php">Registrar</a></li>
				<li><a  href="form_consultar.html">Consultar</a></li>
				<li><a href="form_eliminar.html">Eliminar</a></li>
			</ul>
      <!--
        <ul class="nav1">
          <li>
            <a href="detalles.php?id=<?php echo $dataAlumno['id']; ?>" class="btn btn-warning mb-2"   title="Ver datos del alumno <?php echo $dataAlumno['namefull']; ?>">
            <i class="bi bi-tv"></i> Ver</a>
          </li>
          <li>
            <a href="formEditar.php?id=<?php echo $dataAlumno['id']; ?>" class="btn btn-info mb-2"   title="Actualizar datos del alumno <?php echo $dataAlumno['namefull']; ?>">
            <i class="bi bi-arrow-clockwise"></i> Actualizar</a>
          </li>
          <li>
            <a href="action.php?id=<?php echo $dataAlumno['id']; ?>&metodo=3&namePhoto=<?php echo $dataAlumno['foto']; ?>" class="btn btn-danger mb-2" title="Borrar el alumno <?php echo $dataAlumno['namefull']; ?>">
            <i class="bi bi-trash"></i> Borrar</a>
          </li>
          <li><a href="form_modificar.html">Modificar</a></li>
          <li><a href="form_eliminar.html">Eliminar</a></li>
        </ul>
    </div>-->
		<!--
    <form class="formulario_1">
			<p class="elementos_formulario">&nbsp;</p>
		  <h3 class="elementos_formulario">Lista de usuarios</h3>
      <p class="elementos_formulario">
			  <input class="btn-register" type="submit" name="submit" id="submit" value="Consultar">
		  </p>
    </form>
    -->
  
 <!--prueba código php - código de conexión-->
 <?php 
    include("config.php");
    //select * from usuarios
    //variable para almacenar sintaxis bd
    //$sql="select * from usuarios";
    //variable para enviar parámetros de cx y query
    //$resultado=mysqli_query($conexion,$sql);

    $sqlAlumnos   = ("SELECT * FROM table_alumnos ORDER BY id DESC");
    $queryAlumnos = mysqli_query($con, $sqlAlumnos);
    $totalAlumnos = mysqli_num_rows($queryAlumnos);
    
 ?>
      <p class="elementos_formulario">&nbsp;</p>
		  <h3 class="elementos_formulario">Lista de usuarios</h3>
	        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Documento</th>
                    <th>Género</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <!--código php para traer los datos uno por uno
                usando función con parámetro resultado-->
                <?php 
                    $conteo =1;
                    while ($dataAlumno = mysqli_fetch_array($queryAlumnos)) { 
                ?>
                <tr>
                    <td><?php echo $conteo++ .')'; ?></td>
                    <td><?php echo $dataAlumno['namefull']; ?></td>
                    <td><?php echo $dataAlumno['cedula']; ?></td>
                    <td><?php echo $dataAlumno['sexo']==='M' ? 'Masculino' : 'Femenino' ?></td>
                    <td>
                      
                      
                      <a href="modificar.php?id=<?php echo $dataAlumno['id']; ?>" class="btn btn-info mb-2"   title="Actualizar datos del alumno <?php echo $dataAlumno['namefull']; ?>">

                      <i class="bi bi-arrow-clockwise"></i> Modificar</a>
                      <a href="action.php?id=<?php echo $dataAlumno['id']; ?>&metodo=3&namePhoto=<?php echo $dataAlumno['foto']; ?>" class="btn btn-danger mb-2" title="Borrar el alumno <?php echo $dataAlumno['namefull']; ?>">
                      <i class="bi bi-trash"></i> Borrar</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
          </table>
          <?php 
            //mysqli_close($conexion);
            include('mensajes.php'); 
          ?>
          
			
	</div>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
  $(function(){
    $('.toast').toast('show');
  });
  </script>

</body>

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
