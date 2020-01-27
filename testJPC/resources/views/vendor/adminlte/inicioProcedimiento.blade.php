@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
			@include('flash::message')
			<h1><font color="negro">Resultados de Laboratorio Externos</font></h1>
			<td><a href="{{url('/seleccionarvisitainspeccion')}}" class="btn btn-success btn-xs"><span>Capturar Resultados de Laboratorio Externos</span></a></td>
			<table class="table table-striped">
				<thead>
				<tr>
					<th><font color="negro">ID</font></th>
					<th><font color="negro">Fecha de Entrega de Resultados</font></th>
          <th><font color="negro">Actividad</font></th>
					<th><font color="negro">Razon Social</font></th>
					<th><font color="negro">Laboratorio</font></th>
					<!--th><a href="{{url('/pdfinicioprocedimiento')}}" class="btn btn-success btn-xs"><span>PDF</span></a></th-->
				</tr>
				<tr>
						<td>1</td>
						<td>07/05/18 11:00 a.m.</td>
						<td>Restaurante</td>
						<td>ICR, S.A. de C.V.</td>
						<td>Laboratorios Laquin MR SA de CV</td>
						<td>
							<!--Editar-->
							<a href="{{url('/editarvisitainspeccion')}}" class="btn btn-primary btn-xs">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<!--Eliminar-->
							<a href="{{url('/eliminarvisitainspeccion')}}" class="btn btn-danger btn-xs">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
						</td>
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
