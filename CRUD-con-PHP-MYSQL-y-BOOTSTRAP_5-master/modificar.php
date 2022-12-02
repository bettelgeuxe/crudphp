<!DOCTYPE html>
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

<body class="login-img-body">

 <!-- Imagen de Formulario-->	
    <div class="container formulario_1">
        <div id="header">
            <ul class="nav1">
                <li><a href="listado.php">Listado</a></li>
                <li><a href="form_registro.html">Registrar</a></li>
                <li><a href="form_consultar.html">Consultar</a></li>
                <li><a class="active" href="form_modificar.html">Modificar</a></li>
                <li><a href="form_eliminar.html">Eliminar</a></li>
            </ul>
		</div>
    <?php
    include('config.php');
    $idAlumno     = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);
    $sqlAlumnos   = ("SELECT * FROM table_alumnos WHERE id='$idAlumno' LIMIT 1");
    $queryAlumnos = mysqli_query($con, $sqlAlumnos);
    $dataAlumno   = mysqli_fetch_array($queryAlumnos);
    ?>
    <form class="formulario_1" method="POST" action="action.php?metodo=2" enctype="multipart/form-data">
            <p class="elementos_formulario">
                <input type="text" name="id" value="<?php echo $dataAlumno['id']; ?>" hidden>
                    <label>Nombre y Apellido</label>
                        <input type="text" name="namefull" value="<?php echo $dataAlumno['namefull']; ?>">
                    <label>Nº Documento</label>
                        <input type="number" name="cedula" value="<?php echo $dataAlumno['cedula']; ?>">
            </p>
            <p class="elementos_formulario">
                <label for="sexo">Sexo del Alumno</label>
                <input type="radio" name="sexo" value="M" <?php echo $dataAlumno['sexo']==='M' ?  'checked' : '' ?> checked>
                <label for="sexoM">Masculino </label>
                <input type="radio" name="sexo" value="F" <?php echo $dataAlumno['sexo']==='F' ?  'checked' : '' ?>>
                <label for="sexoF">Fememino</label>
            </p>
            
            <p class="elementos_formulario">
                <label for="Sexo">Secci&oacute;n</label>
                <select class="form-select" name="section">
            <?php  
                if($dataAlumno['section'] =="A"){
                echo '<option value="A" selected>A</option>';
                echo '<option value="B">B</option>';
                echo '<option value="C">C</option>';
                }elseif($dataAlumno['section'] =="B"){
                echo '<option value="B" selected>B</option>';
                echo '<option value="A">A</option>';
                echo '<option value="C">C</option>';
                }else{
                echo '<option value="C" selected>C</option>';
                echo '<option value="A">A</option>';
                echo '<option value="B">B</option>';
                }
            ?>
            </select>
            </p>
            <p class="elementos_formulario">
                <label for="formFile">Foto del Alumno</label>
                <input type="file" name="foto" accept="image/png,image/jpeg">
            </p>
            <p class="elementos_formulario">
                <button type="submit">
                    Actualizar datos del Alumno
                <i class="bi bi-arrow-right-circle"></i>
            </button>
            </p>
        </form>
    

    <div class="col-md-5 mb-3">
        <label>Foto actual del alumno</label>
        <br>
        <img src="fotosAlumnos/<?php echo $dataAlumno['foto']; ?>" alt="foto perfil" class="card-img-top fotoPerfil">
    </div>



  </div>
</div>
</div>
<?php
  include('mensajes.php'); 
?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
$(function(){
  $('.toast').toast('show');
});
</script>

</body>
</html>