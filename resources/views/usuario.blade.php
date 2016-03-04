	@extends ('layout')
	@section ('contenido')
		<fieldset class="fieldcuerpo" align="left">
					<legend>Usuarios</legend>
	  	<div>

	  	<a href="#">+ Nuevo usuario</a>
	  	</br>
	  	</br>	  	
	  	</div>
	  	<fieldset class="fieldcuerpo" align="left">
					<legend>DETALLE</legend>
		<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px;-moz-border-radius:4px;-webkit-border-radius:4px;border:1px #444444 solid;">
	<thead style="font-size:13px;color:#FFF;background-color:#444444;height:40px;">
		<tr>
			<th>ID</th>
			<th>C.I.</th>
            <th>NOMBRE</th>
			<th>APELLIDO PATERNO</th>
			<th>APELLIDO MATERNO</th>
			<th>AREA</th>
			<th>CARGO</th>
			<th>NIVEL</th>
			<th>ACCIONES</th>	
		</tr>
	</thead>
	<tfoot style="font-size:13px;color:#FFF;background-color:#444444;height:40px;">
		<tr>
			<th>ID</th>
			<th>C.I.</th>
            <th>NOMBRE</th>
			<th>APELLIDO PATERNO</th>
			<th>APELLIDO MATERNO</th>
			<th>AREA</th>
			<th>CARGO</th>
			<th>NIVEL</th>
			<th>ACCIONES</th>	
		</tr>
	</tfoot>
	<tbody style="font-size:11px;">
		
	</tbody>
</table>
</fieldset>

	@stop