@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Captura de Visitas de Inspeccion</font></h1>
			<form action="{{url('/guardarvisitainspeccion')}}" method="POST">
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <!--Buscado de Establecimientos-->
            <div class="form-group">
                <label for="nombre_establecimiento">Nombre del Establecimiento: </label>
								<input type="text" style="width : 450px; heigth : 450px"name="nombre_establecimiento" readonly value="Restaurante Cayenna">
            </div>
            <!--Despliege de los datos solicitados-->
            <div class="form-group">
        				<label for="razon_social">Razon Social:</label>
                <input type="text" style="width : 350px; heigth : 350px"name="razon_social" readonly value="Cayena Gastronómica S.A. de C.V.">

                <label for="actividad">Actividad:</label>
                <input type="text" style="width : 100px; heigth : 100px"name="actividad" readonly value="Restaurante">
            </div>
            <div class="form-group">
        		<label for="rfc">RFC:</label>
                <input type="text" style="width : 150px; heigth : 150px"name="rfc" readonly value="GACE980816SG9">

                <label for="email">Correo Electronico:</label>
                <input type="text" style="width : 200px; heigth : 200px"name="email" readonly value="cayena@gmail.com">
        	</div>
            <div class="form-group">
                <h3><font color="negro">Domicilio</font></h3>

        				<label for="calle">Calle:</label>
                <input type="text" style="width : 350px; heigth : 350px"name="calle" readonly value="Jose Diego Valadez">

                <label for="num_exterior">N° Exterior: </label>
                <input type="text" style="width : 80px; heigth : 80px"name="num_exterior" readonly value="89 Pte">

                <label for="num_interior">N° Interior:</label>
                <input type="text" style="width : 80px; heigth : 80px"name="num_interior" readonly>
        	</div>
            <div class="form-group">
                <label for="colonia">Colonia:</label>
                <input type="text" style="width : 350px; heigth : 350px"name="colonia" readonly value="Desarrollo Urbano Tres, Ríos">

                <label for="codigo_postal">Codigo Postal:</label>
                <input type="number" style="width : 100px; heigth : 100px"name="codigo_postal" readonly value="80100">
                </div>
            <div class="form-group">
        		<label for="num_medidor">N° de Medidor:</label>
                <input type="number" style="width : 150px; heigth : 150px"name="num_medidor" readonly value="856396">

                <label for="cuenta">Cuenta:</label>
                <input type="number" style="width : 150px; heigth : 150px"name="cuenta" readonly value="19091">
        	</div>

            <div class="form-group">
                <h3><font color="negro">Visitas de Inspeccion</font></h3>

        		<label for="numv_inspeccion">N° V.I.:</label>
        		<input type="text" name="numv_inspeccion" required>

                <label for="fechav_inspeccion">Fecha de Visita de Inspeccion:</label>
        		<input type="datetime-local" name="fechav_inspeccion" required> <span class="glyphicon glyphicon-calendar"></span>
        	</div>
            <div class="form-group">
        		<label for="num_oficioVI">N° Oficio V.I.:</label>
        		<input type="text" name="num_oficioVI" required>

                <label for="descarga">Descargas:</label>
        		<input type="number" style="width : 50px; heigth : 50px" name="descarga">
        	</div>
            <div class="form-group">
                <label for="trampa">Trampa:</label>
                <select name="trampa" >
                    <option value="0" selected="">-------</option>
                    <option value="1">de Grasas y Aceites.</option>
                    <option value="2">de Solidos Suspendidos Totales.</option>
                    <option value="3">Dos Trampas</option>
                </select>
            </div>
            <div class="form-group">
        		<label for="num_permiso">N° de Permiso:</label>
        		<input type="text" name="num_permiso">

                <label for="fechaemision_permiso">Fecha de Emision del Permiso:</label>
        		<input type="datetime-local" style="width : 200px; heigth : 200px" name="fechaemision_permiso"> <span class="glyphicon glyphicon-calendar"></span>
        	</div>
            <div class="form-group">
        		<label for="observaciones">Obeservaciones:</label>
        		<input type="observaciones" style="width : 400px; heigth : 400px" name="observaciones">
        	</div>
            <div>
                <input type="checkbox" name="empresa_nueva">Empresa Nueva
            </div>
            <div>
        		<button type="submit" class="btn btn-primary">Registrar</button>
        		<a href="{{url('/visitainspeccion')}}" class="btn btn-danger">Cancelar</a>
        	</div>
            </input>
            </form>
        @endsection
    @endsection
