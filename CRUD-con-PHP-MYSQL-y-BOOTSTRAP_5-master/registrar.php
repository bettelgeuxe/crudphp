<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Registrar</title>
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
		
        <!-- Menú-->
		
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
                <li><a href="listado.php">Listado</a></li>
                <li><a class="active" href="registrar.php">Registrar</a></li>
                <li><a href="form_consultar.html">Consultar</a></li>
                <li><a href="form_eliminar.html">Eliminar</a></li>
            </ul>
		

        <form class="formulario_1" method="POST" action="action.php" enctype="multipart/form-data"><!--enctype para poder enviar archivos como las fotos-->    
            <input type="text" name="metodo" value="1" hidden>
                <p class="elementos_formulario">&nbsp;</p>
                    <h3 class="elementos_formulario">Colegio San Ignacio</h3>
                <p class="elementos_formulario">
			        <label>Nombre y Apellido</label> 
			        <input type="text" name="namefull">
			        <label>Nº Documento</label>
					<input type="number" name="cedula" placeholder="Número de documento">
			    </p>				
		        <p class="elementos_formulario">
		            <label>Género</label>
		            <input type="radio" name="sexo" value="M" checked>
                    <label for="sexoM">Masculino</label>
                    <input type="radio" name="sexo" value="F">
                    <label for="sexoF">Femenino</label>
                    <label>Sección</label>
                    <select name="section" id="section">
                        <option value="">Asigne una sección</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select> 
			    </p>
	            <p class="elementos_formulario">
			        <label for="formFile">Foto del Usuario</label>
			        <input name="foto" type="file" accept="image/png,image/jpeg">
			        
                </p>
                <p class="elementos_formulario">
			        <button type="submit" class="btn-register">
                        Registrar Usuario
                        <i class="bi bi-arrow-right-circle"></i>
                    </button>
			    </p>
      </form>
        </div>
	</div>
    <?php
    include('config.php');
    $sqlAlumnos   = ("SELECT * FROM table_alumnos ORDER BY id DESC");
    $queryAlumnos = mysqli_query($con, $sqlAlumnos);
    $totalAlumnos = mysqli_num_rows($queryAlumnos);

    ?>
    <?php
        include('mensajes.php'); 
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    $(function(){
    $('.toast').toast('show');
    });
    </script>

</body>

	<!-- Inicio del pie de página -->
<!--
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

</footer>-->
</html>
