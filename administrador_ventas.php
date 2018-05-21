<!DOCTYPE html>
<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
	
?>
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
		<?php include('headeradministrador.php');
		?>	
<!--fin menu cabecera-->

<!--tabla-->
<section>
	<center><h1>Ultimas Compras</h1></center>
	<table border="1px" width="100%">
		
		<tr>
			<td>Imagen</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Subtotal</td>
		</tr>

		<?php
		     
		      $re= mysql_query("select * from tbl_compras");
		      $numeroventa=0;
		      while ($f=mysql_fetch_array($re)) {
		      	if($numeroventa !=$f['numeroventa']){
		      	echo '<tr><td>Compra Número: '.$f['numeroventa'].'</td></tr>';
		       }

		      $numeroventa=$f['numeroventa'];
		      echo'<tr>
		      			<td><img src="./material/'.$f['imagen'].'" width="100px" heigth="100px" /> </td>
		      			<td>'.$f['nombre'].' </td>
		      			<td>'.$f['precio'].' </td>
		      			<td>'.$f['cantidad'].' </td>
		      			<td>'.$f['subtotal'].' </td>

		      	  </tr>';
		      	   }
		 ?>     	   
	</table>
</section>
	
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