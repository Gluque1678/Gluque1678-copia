<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	// Configuración nombre precio cantidad y imagen para añadirlo al carrito de compra
	session_start();
?>
<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilo14.css" media="screen">
		<!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script type="text/javascript" href="./js/script.js"></script>
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
			$re = mysql_query("select * from tbl_material where id_material=".GET['id_material'])or die(mysql_error());
			while ($f=mysql_fetch_array($re)){
	?>		

	<center>
		<img src="./img/material/<?php echo $idproducto ?>/<?php echo $idproducto ?>.jpg" class="imagenes">
		<img src="./material/<?php echo $f[$'imagen'];?>"></br>
		<span><?php echo $f[$'nombre'];?></span></br>
		<span>Precio: <?php echo $f[$'precio'];?>"</span></br>
		<a href="./detallesver.php?id=<?php $f['id_material'];?>">ver</a>
	</center>



	<?php
	}
	?>
	<!--FIN DEL CONTENIDO-->

	<!--Pie-->
		<div class="card-footer text-muted" id="pie">
		 2 days ago
		</div>
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