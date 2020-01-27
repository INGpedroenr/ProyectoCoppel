@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Captura de Visitas de Inspeccion</font></h1>
			<form action="{{url('/guardarvisitainspeccion')}}/{{'$establecimientos->id'}}" method="POST">
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <!--Buscado de Establecimientos-->
            <div class="form-group">
                <label for="nombre_establecimiento">Seleccione el Establecimiento:</label>
								<select name="v_inspeccion" style="width : 300px; heigth : 300px">
                            <option>1 - Restaurante Cayenna	</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
                </select>

								<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#altaEstablecimientoM">Alta de Establecimiento </button>
								<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#buscarEstablecimientoM">Buscar Establecimiento <span class="glyphicon glyphicon-search"></span></button>
								<td><a href="{{url('/registrarinicioprocedimiento')}}" class="btn btn-success btn-xs" ><span>Detalles del Establecimiento</span></a></td>
          	</div>

      </input>
      </form>

	  @include('adminlte::Modals.altaEstablecimientoM')
		@include('adminlte::Modals.buscarEstablecimientoM')

        @endsection
    @endsection
