	@extends ('layout')
	@section ('contenido')
		<fieldset class="fieldcuerpo" align="left">
					<legend>PRODUCTOS</legend>
	  	<div>

	  	<a href="#">+ Nuevo producto</a>
	  	</br>
	  	</br>	  	
	  	<span class="titulo">ID Rubro : </span><span  class="subtitulo"># rubro</span> 
	  	</br>	
	  	</br>
	  	<span class="titulo">Nombre del rubro : </span><span class="subtitulo"># rubro</span>
	  	</br>	
	  	</br>
	  	<span class="titulo">Cantidad de productos : </span><span class="subtitulo"># rubro</span>
	  	</div>	
	  	</br>
	  	<fieldset class="fieldcuerpo" align="left">
					<legend>DETALLE</legend>
		<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px;-moz-border-radius:4px;-webkit-border-radius:4px;border:1px #444444 solid;">
	<thead style="font-size:13px;color:#FFF;background-color:#444444;height:40px;">
		<tr>
			<th>ID</th>
            <th>NOMBRE DEL PRODUCTO</th>
			<th>PRECIO UNITARIO</th>
			<th>CANTIDAD DISPONIBLE</th>
			<th>ACCIONES</th>	
		</tr>
	</thead>
	<tfoot style="font-size:13px;color:#FFF;background-color:#444444;height:40px;">
		<tr>
			<th>ID</th>
            <th>NOMBRE DEL PRODUCTO</th>
			<th>PRECIO UNITARIO</th>
			<th>CANTIDAD DISPONIBLE</th>
			<th>ACCIONES</th>	
		</tr>
	</tfoot>
	<tbody style="font-size:11px;">
		
	</tbody>
</table>
</fieldset>
</fieldset>
	@stop