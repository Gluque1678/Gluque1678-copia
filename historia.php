<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
?>

<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<link rel="stylesheet" type="text/css" href="css/estilo15.css" media="screen">
		 <!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	     <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  	</head>
  
  <body>

	</header>
	<!--el include menu de navegacion cabecera-->
		<?php include('headerindex.php');
		?>
	</header>   

    <main>	
       	
   		<section>          
	      <article> 
			    <br>  

			    <div class="card text-dark bg-success mb-3" style="max-width: 240rem;">
					  <div class="card-header text-white text-center"><H3>ONLINE ELECTRÓNICA</H3></div>
					  <div class="card-body">
					    
						<p class="card-title text-dark text-justify">Está creado por un grupo humano de profesionales del sector, tanto en la venta de componentes informáticos de gama alta , 
						como en montajes de PC´s a medida y servicio postventa a finales del año 2016. La idea, surge atendiendo a la enorme demanda de muchos usuarios, los cuales nos remitían la necesidad de una 
						"tienda online diferente", que diera la importancia, que se requiere a aspectos básicos, como son la atención personalizada y un servicio postventa de calidad.
						En ONLINE ELECTRÓNICA, todos nuestros clientes recibirán una atención totalmente individualizada, y el asesoramiento necesario para poder adquirir el hardware que necesiten realmente y al mejor precio.
						Otro aspecto diferencial de ONLINE ELECTRÓNICA es su insuperable servicio postventa//garantias. Queremos que nuestros clientes noten la diferencia. Para ello, disponemos de una batería de componentes 
						destinados únicamente a acelerar nuestros procesos de RMA. Además nuestros clientes tendrán información constante, del estado de su incidencia. Por supuesto, totalmente individualizada.
						ONLINE ELECTRÓNICA ,actualmente, trabaja  en calidad de reseller oficial, o Golden Reseller de los mas importantes fabricantes de hardware de alto rendimiento del panorama mundial. 
						Tales como,Aerocool, Asus, Asrock, Msi, Gigabyte, Bequiet, Fractal, Thermaltake, Silverstone, In win, Roccat, Raccer, thermaltake, Silicon Power...Teniendo trato directo y constante con cada uno de ellos.</P>
						
						
					  </div>
				</div>				

				</br>

								  
		
			</article>

		</section>

		</br>

		<section>	

			<article>


				<?php include('quienesfooter.php');
				?>	

			</article>
		
		</section>	

	</main>

	<aside>

	</aside>

	<footer>
	<!--el include el pie de página-->
	<?php include('footer.php');
		?>	
	</footer>

	
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>

