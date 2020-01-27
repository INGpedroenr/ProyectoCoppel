@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
			@include('flash::message')
			<h1><font color="negro">Indice de Incumplimiento</font></h1>
			<td><a href="{{url('/registrarindiceincumplimiento')}}" class="btn btn-success btn-xs"><span>Capturar Calculo Indice de Incumplimiento</span></a></td>
			<table class="table table-striped">
				<thead>
				<tr>
					<th><font color="negro">Nombre</font></th>
					<th><font color="negro">Calle</font></th>
          <th><font color="negro">N° Externo</font></th>
					<th><font color="negro">Labortorio</font></th>
					<th><font color="negro">Fecha de Muestro</font></th>
					<!--th><a href="{{url('/pdfinicioprocedimiento')}}" class="btn btn-success btn-xs"><span>PDF</span></a></th-->
				</tr>
				<!--tr>
						<td>Restaurante Cayenna</td>
						<td>Jose Diego Valadez</td>
						<td>89 Pte.</td>
						<td>JAPAC</td>
						<td>07/02/2018 04:00 p.m.</td>
						<td>
							<!--Editar-->
							<!--a href="{{url('/editarvisitainspeccion')}}" class="btn btn-primary btn-xs">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a-->
							<!--Eliminar-->
							<!--a href="{{url('/eliminarvisitainspeccion')}}" class="btn btn-danger btn-xs">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a-->
						<!--/td-->
				</tr>
				</thead>
			</table>
			<div class="text-center">

			</div>
				<script type="text/javascript">
            		setTimeout(function() {
                		$(".alert").fadeOut(1500);
            		},1500);
				</script>

		@endsection

	@endsection
