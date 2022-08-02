<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo $_prefi1;?>bootstrap-3.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $_prefi1;?>bootstrap-3.0.0/css/jquery.dataTables.min.css">	
		<link rel="stylesheet" href="<?php echo $_prefi1;?>css/contenedores.css">		
		<link rel="stylesheet" href="<?php echo $_prefi1;?>css/colorMenu.css">
		<link rel="stylesheet" href="<?php echo $_prefi1;?>css/pie_pagina.css">		
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
			<?php   include $_prefi1.$_barra_superior; ?>
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

	<script src="<?php echo $_prefi1;?>bootstrap-3.0.0/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo $_prefi1;?>bootstrap-3.0.0/js/bootstrap.min.js"></script>
	<script src="<?php echo $_prefi1;?>bootstrap-3.0.0/js/jquery.dataTables.min.js"></script>
</html>	