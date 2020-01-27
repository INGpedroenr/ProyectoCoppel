@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
			@include('flash::message')
			<h1><font color="negro">Visitas de Inspeccion</font></h1>
			<td><a href="{{url('/seleccionarestablecimiento')}}" class="btn btn-success btn-xs"><span>Capturar Visita de Inspeccion</span></a></td>
			<table class="table table-striped">
				<thead>
				<tr>
					<th><font color="negro">N° V.I.</font></th>
					<th><font color="negro">Fecha de V.I.</font></th>
					<th><font color="negro">N° de Oficio</font></th>
					<th><font color="negro">Actividad</font></th>
					<th><font color="negro">Razon Social</font></th>
					<th><font color="negro">Calle</font></th>
					<th><a href="{{url('/pdfvisitainspeccion')}}" class="btn btn-success btn-xs"><span>PDF</span></a></th>
				</tr>
                <tr>
                    <td>845</td>
										<td>07/02/2018 03:45 p.m.</td>
										<td>V.I.- 4587</td>
										<td>Restaurante</td>
										<td>Cayena Gastronómica S.A. de C.V.</td>
										<td>Jose Diego Valadez</td>
										<td>
											<!--Editar-->
											<a href="{{url('/editarvisitainspeccion')}}" class="btn btn-primary btn-xs">
											<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											<!--Eliminar-->
											<a href="{{url('/eliminarvisitainspeccion')}}" class="btn btn-danger btn-xs">
										  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    </<td>
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
