<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Control de Almacenes e Inventarios (SCAI)</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="<?php echo asset('css/menu.css')?>" type="text/css"> 
	<link rel="stylesheet" href="<?php echo asset('css/form.css')?>" type="text/css"> 
	<link rel="stylesheet" href="<?php echo asset('css/font/menu.css')?>" type="text/css">  
	<script src="<?php echo asset('js/jQuery.js')?>"></script>
	<script src="<?php echo asset('js/menu.js')?>"></script>  
	<script src="<?php echo asset('js/grilla.js')?>"></script> 


		<link rel="stylesheet" type="text/css" href="<?php echo asset('css/table/jquery.dataTables.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo asset('css/table/shCore.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo asset('css/table/demo.css')?>">
		<style type="text/css" class="init">
		</style>
		<script type="text/javascript" language="javascript" src="<?php echo asset('js/table/jquery.js')?>"></script>
		<script type="text/javascript" language="javascript" src="<?php echo asset('js/table/jquery.dataTables.js')?>"></script>
		<script type="text/javascript" language="javascript" src="<?php echo asset('js/table/shCore.js')?>"></script>
		<script type="text/javascript" language="javascript" src="<?php echo asset('js/table/demo.js')?>"></script>
		<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>


<body>
<div>
	<header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-home"></span>Sistema de Control de Almacenes e Inventarios</a>
		</div>
 
		<nav class="vert">
			<ul>
				<li><a href="#"><span class="icon-house"></span>Inicio</a></li>
				<li class="submenu">
					<a href="#"><span class="icon-folder-upload"></span>Ingresos<span class="caret icon-arrow-down6"></span></a>
					
				</li><li class="submenu">
					<a href="#"><span class="icon-folder-download"></span>Salidas<span class="caret icon-arrow-down6"></span></a>
				</li>
				<li class="submenu">
					<a href="#"><span class="icon-book"></span>Reportes<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="#">Reporte General<span class="icon-dot"></span></a></li>
						<li><a href="#">Reporte por Rubro<span class="icon-dot"></span></a></li>
						<li><a href="#">SubElemento #3 <span class="icon-dot"></span></a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><span class="icon-eye"></span>Alertas<span class="caret icon-arrow-down6"></span></a>
					
				</li>
				<li class="usuario" >
					<a href="#" ><span class="icon-user-minus"></span>Usuario<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="#">Ver Perfil<span class="icon-dot"></span></a></li>
						<li><a href="#">SubElemento #2 <span class="icon-dot"></span></a></li>
						<li><a href="#">SubElemento #3 <span class="icon-dot"></span></a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	</br>
	<div class="banner">
		<div class="logo">
			<img src="<?php echo asset('img/banner.png')?>">
			</div>
		<div class="nombre">
			<img src="<?php echo asset('img/nombre.png')?>">
			</div>
	</div>
	<div class="menu_lat">
		<div class="logo2">
		<header class="lat">
			<div  class="menu_bar2" style="color: #fff; left: 12px; font-size: 20px;"><a href="#" class="bt-menu"><span class="icon-paragraph-left" style="color: #fff;"></span></a>
		
			</div>
		
			<nav class="lateral">	
				<ul>
					<li> <a href="almacen">ALMACENES</a> </li>
					<li> <a href="usuario">USUARIOS</a> </li>
					<li> <a href="solicitud">SOLICITUDES</a> </li>
					<li> <a href="respuesta">RESPUESTAS</a> </li>
					<li> <a >CONSULTAS</a> 
						<ul class="children">
							<li><a href="#">Por rubro<span class="icon-dot"></span></a></li>
							<li><a href="#">Por producto<span class="icon-dot"></span></a></li>
							<li><a href="#">Por usuario<span class="icon-dot"></span></a></li>
							<li><a href="#">Por fecha de ingreso<span class="icon-dot"></span></a></li>
							<li><a href="#">Por fecha de salida<span class="icon-dot"></span></a></li>
							<li><a href="#">Por fecha de solicitud<span class="icon-dot"></span></a></li>
							<li><a href="#">Por fecha de respuesta<span class="icon-dot"></span></a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
	</div>
		<div class="formulario">
		@yield('contenido')
</div>
</div>
</div>

</br>
<div> FOOTER</div>
</body>
</html>
