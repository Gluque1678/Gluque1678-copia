<?php
	include_once('clases/claseProducto.php');
	include_once('clases/claseCarrito.php');
	$product = new Product();
	$cart = new Cart();
	if(isset($_GET['action'])){
		switch ($_GET['action']){
			case 'add':
				$cart->add_item($_GET['id'], $_GET['cantidad']);
			break;
			case 'remove':
				$cart->remove_item($_GET['id']);
			break;
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
		<?php include('header2.php');
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

		<!--<h1></h1>
		<a href="./carrito.php" title="carrito de compras"><img src="./img/compra/carrito.jpg" class="imagenes"></a>
		 <a href="detalles.php" class="btn btn-warning" id="descripcion4">Vuelve Atrás</a> -->
	</header>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br>

	
	<section>
		<!--<div class="producto">
			<center>
				<?=$cart->get_items();?><br/><br/>
				Cantidad de productos: <?=$cart->get_total_items();?><br/>
				Total a pagar: <?=$cart->get_total_payment();?>€<br/>

				<a href="usuario.php">Volver al catálogo</a>
			</center>
		</div>-->

		<div class="row">
		  
		  <div class="col-sm-6">
		    <div class="card border-dark mb-3">
		      <div class="card-body">
		      	
		      	<center> 	
			        <h4 class="card-title"><?=$cart->get_items();?></h4>
			        <p class="card text-white bg-success mb-3 style="max-width: 18rem;">
			        Cantidad de productos: <?=$cart->get_total_items();?></p>
			        <p class="card text-white bg-danger mb-3 style="max-width: 18rem; ">
			        Total a pagar: <?=$cart->get_total_payment();?>€</p>
			     	<h4 class="card-title1"><a href="usuario.php#" class="btn btn-primary">Volver al catálogo</a></h4>
			     	<!--<h4 class="card-title2"><a href="usuario.php#" class="btn btn-primary">Pagar</a></h4>-->
			     	<!-- Botones PayPal -->
						<form action="https://www.paypal.com/es/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_xclick">
							<!-- Email que recibirá el pago -->
							<input type="hidden" name="business" value="fasion4@hotmail.com">
							<!-- Nombre del producto  -->
							<input type="hidden" name="item_name" value="Compra en Electronica Online">
							<!-- Tipo de moneda -->
							<input type="hidden" name="currency_code" value="EUR">
							<!-- Precio del producto -->
							<input type="hidden" name="amount" value="<?=$cart->get_total_payment();?>">
							<!-- Redirección al pagar -->
							<input type="hidden" name="return" value="http://localhost/Gluque1678/carrito.php">
							<!-- Redirección al cancelar -->
							<input type="hidden" name="cancel_return" value="http://localhost/Gluque1678/carrito.php">
							<!-- Imagen de botón -->
							<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
						</form>

					<!--Fin botones PayPal-->
		        <center>
		      </div>
		    </div>
		  </div>
		  
						

		</div>	
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

    <script type="text/javascript">
    	function deleteProduct(code){
    		//alert(code);
			window.location.href = 'carrito.php?action=remove&id='+code;
		}
    </script>



</body>
</html>