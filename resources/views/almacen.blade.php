	@extends ('../layout')
	@section ('contenido')

		<fieldset class="fieldcuerpo" align="left">
					<legend>ALMACENES</legend>
			  	<div>

	  	<a href="#" onclick=window.open('producto','ventana','width=640,height=480,scrollbars=NO,menubar=NO,resizable=NO,titlebar=NO,status=NO');return false>+ Nuevo almacen</a>
	  	</br>
	  </br>
		<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px;-moz-border-radius:4px;-webkit-border-radius:4px;border:1px #444444 solid;">
	<thead style="font-size:13px;color:#FFF;background-color:#444444;height:40px;">
		<tr>
			<th>ID</th>
            <th>NOMBRE DEL ALMACEN</th>
			<th>UBICACION DEL ALMACEN</th>
			<th>ACCIONES</th>	
		</tr>
	</thead>
	<tfoot style="font-size:13px;color:#FFF;background-color:#444444;height:40px;">
		<tr>
			<th>ID</th>
            <th>NOMBRE DEL ALMACEN</th>
			<th>UBICACION DEL ALMACEN</th>
			<th>ACCIONES</th>
			
		</tr>
	</tfoot>
	<tbody style="font-size:11px;">
		
	</tbody>
</table>
</fieldset>
	@stop