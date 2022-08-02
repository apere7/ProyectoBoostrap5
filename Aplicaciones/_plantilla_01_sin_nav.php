<!DOCTYPE html>

<html lang="es">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- muesta correctamente y el zoom funcione bien en los dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_Nombre_de_pagina;?></title>
	<link rel="stylesheet" href="<?php echo $_prefi1;?>bootstrap-5.0.2-dist/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="<?php echo $_prefi1;?>bootstrap-5.0.2-dist/css/jquery.dataTables.min.css" media="screen">
	<link rel="stylesheet" href="<?php echo $_prefi1;?>bootstrap-5.0.2-dist/css/propía.css" media="screen">
	<script src="<?php echo $_prefi1;?>bootstrap-5.0.2-dist/js/bundle.min.js"></script>	
	</head>

	
	<body class="body">
		<!-------------------------------------------->
		<!--   ENCABEZADO		  					-->
		<div class="contenedor_1">
			<?php   include $_prefi1.$_encabezado; ?>	
		</div>			

		<!-------------------------------------------->		
		<!--   BARRA DE NAVEGACION					-->
		<div class="contenedor_2">
		</div>			

		<!-------------------------------------------->		
		<!--   CONTENEDOR PRINCIPAL					-->
		<div class="contenedor_3">
			<?php   include $_prefi1.$_contenedor_principal; ?>	
		</div>	

		<!------------------------------------------------>
		<!--   PIE DE PAGINA		  					-->		
		<div class="contenedor_4">
			<?php   include $_prefi1.$_pie_de_pagina; ?>
		</div>

	</body>

	<script src="<?php echo $_prefi1;?>bootstrap-5.0.2-dist/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo $_prefi1;?>bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<script src="<?php echo $_prefi1;?>bootstrap-5.0.2-dist/js/jquery.dataTables.min.js"></script>

	    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>

    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->

</html>	