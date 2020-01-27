<div class="modal fade" id="buscarEstablecimientoM" tabindex="-1" role="dialog" aria-labelledby="Buscador" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Buscar Establecimientos</h3>
            </div>
            <table class="table table-striped">
      				<thead>
      				<tr>
      					<th><font color="negro">ID</font></th>
      					<th><font color="negro">Establecimiento</font></th>
      					<th><font color="negro">Razon Social</font></th>
      					<th><font color="negro">RFC</font></th>
      					<th><font color="negro">Actividad</font></th>
      					<th><font color="negro">Calle</font></th>
      					<th><font color="negro">N° Exterior</font></th>
      				@foreach($establecimientos as $e)
      					<tr>
      						<td>{{$e->id}}</td>
      						<td>{{$e->nombre_establecimiento}}</td>
      						<td>{{$e->razon_social}}</td>
      						<td>{{$e->rfc}}</td>
      						<td>{{$e->actividad}}</td>
      						<td>{{$e->calle}}</td>
      						<td>{{$e->num_exterior}}</td>
      					</tr>
      				@endforeach
      				</thead>
      			</table>
        </div>
    </div>
</div>
