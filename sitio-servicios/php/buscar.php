<?php 
$oficio=$_POST['txtBuscar'];
$conexion=mysqli_connect('localhost','root','','trabajador');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estiloss.css">
	<title>Resultado de búsqueda</title>
</head>
<body>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<img src="img/logoc.png" alt="servimex" class="rounded-pill"">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="menu.php">Regresar <span class="sr-only">(current)</span></a>
        
      </li>
     
      
     
    </ul>
    
    
  </div>
</nav>
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<br>
<br>
<h1 class="display-3">Resultado de búsqueda </h1>
	<table class="table" >
		<thead class="thead-dark">
		<tr>
			
      
      <th scope="col">Nombre</th>
      <th scope="col">Servicio</th>
      <th scope="col">Teléfono</th>
      
		</tr>	
		</thead>
		

		<?php 
		$sql="SELECT nombre_trabajador,servicio,telefono from trabajador where '$oficio' = servicio ";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr class="table-succes">
			
			<td><?php echo $mostrar['nombre_trabajador'] ?></td>
			<td><?php echo $mostrar['servicio'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
</body>
</html>

 
  
	