<?php 
		$producto = $_REQUEST['producto'];
 ?>

<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilo4.css" media="screen">
		<!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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

	<!--INSERTAR CONTENIDO-->

		<?php
				
			//Realizamos la conexion
			include ('conexion.proc.php');

			//Sentencia para mostrar todos los materiales que dispone mi tienda de la tabla tbl_material
			$sql = ("select * from tbl_material where id_material = $producto")or die(mysql_error());

			//mostramos la consulta para ver por pantalla si es lo que esperábamos o o 
			//echo "$sql<br/>";
			//lanzamos la sentencia sql

			$datos = mysqli_query($con, $sql);
			$contador = mysqli_num_rows($datos);	
			echo "<div class='card text-center' id='tarjeta'>";
			while ($prod = mysqli_fetch_array($datos)){ 
	
		?>				
	
			<!--<div class="card text-center" id="tarjeta">-->
			  		<div class="card-header">
			  			 <h1 class="card-title card text-white bg-dark mb-3"><strong><?php echo utf8_encode($prod['nombre']);?></strong></h1>
			 		</div>

	 	 	<!--Cuerpo de la tarjeta slider de la izquierda">-->
				 	<div class="card-body">
				 		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="position: relative; margin: 0 auto; top: 60px; left: -520px; width: 250px; height: 440px;">
				  
							  <ol class="carousel-indicators">
							    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
							  </ol>
								  <div class="carousel-inner">
								    	<div class="carousel-item active">
								   		   	<img src="./img/material/<?php echo $producto ?>/<?php echo $producto ?>.jpg" class="img-responsive" alt="">
								    	</div>
								   		<div class="carousel-item">
								     	  	<img src="./img/material/<?php echo $producto ?>/<?php echo $producto ?>_2.jpg" class="img-responsive" alt="">
								    	</div>
									    <div class="carousel-item">
									     	<img src="./img/material/<?php echo $producto ?>/<?php echo $producto ?>_3.jpg" class="img-responsive" alt="">
									    </div>
									     <div class="carousel-item">
									     	<img src="./img/material/<?php echo $producto ?>/<?php echo $producto ?>_4.jpg" class="img-responsive" alt="">
									    </div>
								  </div>
								  
								  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" id="flechaderecha">
								    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								 
								  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								    <span class="carousel-control-next-icon" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a>
							
						</div>
							 <!--imagenes del producto en el css estilo4.css imagenes-->
								<img src="./img/material/<?php echo $producto ?>/<?php echo $producto ?>.jpg" class="imagenes">
								<img src="./img/material/<?php echo $producto ?>/<?php echo $producto ?>_2.jpg" class="imagenes">
								<img src="./img/material/<?php echo $producto ?>/<?php echo $producto ?>_3.jpg" class="imagenes">
								<img src="./img/material/<?php echo $producto ?>/<?php echo $producto ?>_4.jpg" class="imagenes">
								
							<!--descripcion del producto posicion en el css estilo4.css-->
							    <h6><p class="card text-white bg-primary mb-3" id="descripcion"> <?php echo utf8_encode($prod['descripcion']);?> </p></h6>
							 	<h6><p class="card text-white bg-secondary mb-3" id="descripcion2"> <?php echo utf8_encode($prod['precio']);?>€</p></h6>
							<!-- <a href="comprar.php" class="btn btn-danger" precio="12" titulo="Terminator" id="descripcion3">Compra éste producto</a>-->
							    <a href="usuario.php" class="btn btn-warning" id="descripcion4">Vuelve Atrás</a>
								<a href="carrito.php?producto=<?php echo $prod['id_material'] ?>" class="btn btn-primary" id="descripcion5">Carrito de la compra</a>
							<!--Fin descripcion del producto-->

						
							
			  		</div>

			<!--Fin del cuerpo-->

			<!--Pie-->
					<div class="card-footer text-muted" id="pie">
				    2 days ago
				  	</div>
			<!--Fin del Pie-->	 
			 <?php } //fin while
	 		 ?>

			</div>

			<!--Fin tarjeta-->

			<!--Fin del cuerpo de la página-->

			<!--el include footer-->
 <footer>
	
	<?php include('footer.php');
	?>	
</footer>	

		<!--fin footer-->
		
		<!--Script carousel que me hara que vaya mas rápido y que me pare las imagenes

	<script>

		$('.carousel').carousel({

			interval: 2000,
			pause:"hover"
		});

	</script>-->

    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!--Ventana modal-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--configuracion inicial carrito de compras-->
    <!--<script src="minicart.js"></script>
    <script>paypal.minicart.render({
    		strings:{
    					button:'Pagar'
    					,buttonAlt: "Total"
    					,subtotal: 'Total:'
    					,empty: 'No hay productos en el carrito'
    				}
    								});

    </script>
  <!--Eventos para agregar productos al carrito-->

 <!-- $('.producto').click(function(e){
  	e.stopPropagation();	
  	paypal.minicart.cart.add({
  	business: 'fasion4@hotmail.com', <!--cuenta paypal-->
  	 <!-- $('.producto').click(function(e){
  	eitem_name: $(this).attr("titulo"),
  	amount: $(this).attr("precio"),
  	currency_code: 'EUR'
  		  });
  });-->

</body>
</html>