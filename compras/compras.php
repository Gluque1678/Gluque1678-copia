<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	//Esto se hace para ver si el usuario compra el producto
	session_start();
	include "../conexion.proc.php";
	$arreglo=$_SESSION['carrito'];
	$numeroventa=0;
	$_re=mysql_query("select * from tbl_compras order by numeroventa DESC limit 1"or die(mysql_error());
	while ($f=mysql_fech_array($re)){
			$numeroventa)=$f['numeroventa'];
									}
	if($numeroventa==0){
		$numeroventa=1;
		}else{

			$numeroventa=$numeroventa+1;

	}

	for($i=0; $i<count($arreglo); $i++) { 
		mysql_query("insert into tbl_compras (numeroventa, imagen, nombre, precio, cantidad, subtotal)
		values(".$numeroventa.",
				'".$arreglo['$i']['Imagen']."',
				'".$arreglo['$i']['Nombre']."',
				'".$arreglo['$i']['Precio']."',
				'".$arreglo['$i']['Cantidad']."',
				'".($arreglo['$i']['Precio']*$arreglo['$i']['Cantidad']."'
			)")or die(mysql_error());

	}	
	//Destruye variable de session

	unset($_SESSION['carrito']);
	//para que me vaya al administrador
	header("Location:../admin.php");

?>

<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/" media="screen">
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
   
</body>
</html>