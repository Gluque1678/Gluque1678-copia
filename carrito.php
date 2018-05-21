<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
	include("conexion.proc.php");

	//$producto = $_GET['producto'];

	if(isset($_SESSION['carrito'])){

	} else{
		if(isset($producto)){
			$_nombre="";
			$_precio=0;
			$_imagen="";
			$_re=mysqli_query($con, "select * from tbl_material where id_material=$producto")or die(mysql_error());
			while ($f=mysqli_fetch_array($_re)) {
					$_nombre=$f['nombre'];
					$_precio=$f['precio'];
					$_imagen=$f['imagen'];
			}
			

			//Creo el arreglo y la cantidad 1 porque es la primera vez que accede al arreglo
			$arreglo=array(
				'id' => $producto,
			   	'Nombre' => $_nombre,
			   	'Precio' => $_precio,
			   	'Imagen' => $_imagen,
			   	'Cantidad' => 1
			);

			//Aqui guardo la variable de session 
			$_SESSION['carrito']=$arreglo;
		}
	}

 ?>

<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8"/>
		<title>Carrito</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilo13.css" media="screen">
		<!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<!-- Script JQ -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2"></script>
		<script type="text/javascript" src="./js/scripts.js"></script>
	</head>
  
  <body>
	
	<!--el include menu de navegacion cabecera-->
		<?php include('header.php');
		?>	
<!--fin menu cabecera-->

<!--Carroussel 3d -->

	<div class="content-all">
  		<div class="content-carrousel">

  			<figure><img src="img/material/img1.jpg"></figure>
  			<figure><img src="img/material/img2.jpg"></figure>
  			<figure><img src="img/material/img3.jpg"></figure>
  			<figure><img src="img/material/img4.jpg"></figure>
  			<figure><img src="img/material/img5.jpg"></figure>
  			<figure><img src="img/material/img6.jpg"></figure>
  			<figure><img src="img/material/img7.jpg"></figure>
  			<figure><img src="img/material/img8.jpg"></figure>
  			<figure><img src="img/material/img9.jpg"></figure>
  			<figure><img src="img/material/img10.jpg"></figure>

		</div>
	</div>

	<!--Fin Carroussel 3d -->

	<header>

		<h1></h1>
		<a href="./carrito.php" title="carrito de compras"><img src="./img/compra/carrito.jpg" class="imagenes">
		<a href="detalles.php" class="btn btn-warning" id="descripcion4">Vuelve Atrás</a>
		
	</header>

	
	<section>
		
		<?php
				$total=0;
				if(isset($_SESSION['carrito'])){
					//Creo variable datos y total que se iniciara en 0
					$datos=$_SESSION['carrito'];
					$total=0;
					for($i=0;$i<count($datos);$i++){
					$totalArray = count($datos);
					echo "El número es: ".$totalArray;

		?>

				<div class="producto">
				<center>
					<?php echo '<img src="img/material/_ant/'.$datos['Imagen'].'" /><br/>';?>
					<span><?php echo $datos['Nombre']; ?></span><br>
					<span>Precio<?php echo $datos['Precio'];?></span><br>
					<span>Cantidad:<input type="text" value="<?php echo $datos['Cantidad'];?>"></span><br>
					<span>Precio <?php echo $datos['Precio']*$datos['Cantidad'];?></span><br>
				
					<span class="subtotal">Subtotal:<?php echo $datos['Cantidad']*$datos['Precio'];?></span><br>
				</center>

			</div>

		<?php
			//Calculo variable total
					$total=($datos['Cantidad']*$datos['Precio'])+$total;
					
				}

				}else{

				echo '<center><h2>El carrito de compras esta vacio</h2></center>';

					}
			// Esto me dira que el total es 0
				echo '<center><h2>Total: '.$total.'</h2></center>';

		?>
		<center><a href="usuario.php">Ver catalogo</a></center>
	</section>

	<footer>
	
	<?php include('footer.php');
	?>	

	</footer>	

    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!--Ventana modal-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</body>
</html>