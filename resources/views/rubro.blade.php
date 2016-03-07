	@extends ('layout')
	@section ('VM')
		<div id="bgVentanaModal" class="bgventanaModal">
<div id="VentanaModal" class="VentanaModal">
<p><a href="javascript:despliegaModal('hidden');">Cerrar Ventana Modal</a></p>
</div>
</div>

	@stop
	@section ('contenido')
		<fieldset class="fieldcuerpo" align="left">
					<legend>RUBROS</legend>
	  	<div>

	  	<a href="javascript:despliegaModal('visible');">+ Nuevo rubro</a>
	  	</br>
	  	</br>	  	
	  	<span class="titulo">ID Almacen : </span><span class="subtitulo"># almacen</span> 
	  	</br>	
	  	</br>
	  	<span class="titulo">Nombre del almacen : </span><span class="subtitulo"># almacen</span>
	  	</br>	
	  	</br>
	  	<span class="titulo">Ubicacion del almacen : </span><span class="subtitulo"># almacen</span>
	  	</div>	
	  	</br>
	  	<fieldset class="fieldcuerpo" align="left">
	  <legend>Productos mas solicitados</legend>  		  	
	  	<span class="titulo">Producto #1 : </span><span  class="subtitulo"># producto</span> 
	  	</br>	
	  	</br>	  		  	
	  	<span class="titulo">Producto #2 : </span><span  class="subtitulo"># Producto</span>
	  	</br>	
	  	</br>	  		  	
	  	<span class="titulo">Producto #3 : </span><span  class="subtitulo"># Producto</span>
	  </fieldset> 
	  	<fieldset class="fieldcuerpo" align="left">
					<legend>DETALLE</legend>
		<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px;-moz-border-radius:4px;-webkit-border-radius:4px;border:1px #444444 solid;">
	<thead style="font-size:13px;color:#FFF;background-color:#444444;height:40px;">
		<tr>
			<th>ID</th>
            <th>NOMBRE DEL RUBRO</th>
			<th>CANTIDAD DE PRODUCTOS</th>
			<th>ACCIONES</th>	
		</tr>
	</thead>
	<tfoot style="font-size:13px;color:#FFF;background-color:#444444;height:40px;">
		<tr>
			<th>ID</th>
            <th>NOMBRE DEL RUBRO</th>
			<th>CANTIDAD DE PRODUCTOS</th>
			<th>ACCIONES</th>	
		</tr>
	</tfoot>
	<tbody style="font-size:11px;">
		
	</tbody>
</table>
</fieldset>
	@stop