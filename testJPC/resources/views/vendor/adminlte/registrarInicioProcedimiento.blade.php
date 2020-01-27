@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Captura de Resultado de Laboratorio Externos</font></h1>
			<form action="{{url('/guardarvisitainspeccion')}}" method="POST">
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <!--Buscado de Establecimientos-->
            <!--div class="form-group">
                <label for="v_inspeccion">Buscar Visita de Inspeccion:</label> <span class="glyphicon glyphicon-search"></span>
                <select name="v_inspeccion" style="width : 300px; heigth : 300px">
                            <option>845 - Restaurante Cayenna	</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
                </select>
            </div-->
            <!--Despliege de los datos solicitados-->
            <div class="form-group">
						<label for="razon_social">Razon Social:</label>
						<input type="text" style="width : 350px; heigth : 350px"name="razon_social" readonly value="ICR, S.A. de C.V.">

						<label for="actividad">Actividad:</label>
						<input type="text" style="width : 100px; heigth : 100px"name="laboratorio" readonly value="Restaurante">
            </div>
            <!--div class="form-group">
        		<label for="rfc">RFC: <input type="text" name="razon_social" value="GACE980816SG9"></label>

                <label for="email">Correo Electronico: <input type="text" name="email" value="cayena@gmail.com"></label>
        	</div-->
					<div class="form-group">
						<label for="razon_social">Domicilio</label>
					</div>
            <div class="form-group">
        		<label for="calle">Calle: <input type="text" name="calle" value="Alvaro Obregon"></label>
            <label for="num_exterior">N° Exterior: <input type="text"  style="width : 80px; heigth : 80px" name="num_exterior" value="1379"></label>
            <label for="num_interior">N° Interior: <input type="number"  style="width : 80px; heigth : 80px" name="num_interior" value=""></label>
        	</div>
            <div class="form-group">
                <label for="colonia">Colonia: <input type="text" style="width : 350px; heigth : 350px"name="colonia" value="Guadalupe"></label>
                <label for="codigo_postal">Codigo Postal: <input type="text" name="codigo_postal" value="80270"></label>
						</div>
						<div class="form-group">
							<label for="descargas">Descargas: <input type="number"  style="width : 50px; heigth : 50px" name="descargas" value="1"></label>
						</div>
            <div class="form-group">
        		<label for="fecha_muestreo">Laboratorio: <input type="text" style="width : 80px; heigth : 80px" name="fecha_muestreo" value="Laboratorios Laquin MR SA de CV"></label>
        	  </div>
					<div class="form-group">
							<label for="fecha_muestreo">Fecha de Entrega de Resultados:<input type="text" style="width : 200px; heigth : 200px" name="fecha_muestreo" value="07/05/18 11:00 a.m."></label>
						</div>
						<!--div class="form-group">
							<label for="num_oficioRA">N° de Oficio R.A.: <input type="text" name="num_oficioRA" value="JAPAC D.J. 045"></label>
						</div>
						<div class="form-group">
							<label for="num_oficioRA">N° de Resolutivo Administrativo: <input type="text" name="num_oficioRA" value="GO-SS-004/18"></label>
						</div>
						<div class="form-group">
        		 <label for="fecha_muestreo">Fecha del Resolutivo: <input type="text" style="width : 200px; heigth : 200px" name="fecha_muestreo" value="15/02/2018 11:00 a.m."></label>
						 <label for="fecha_muestreo">Fecha Recibido Empresa: <input type="text" style="width : 200px; heigth : 200px" name="fecha_muestreo" value="16/02/2018 11:00 a.m."></label>
        	  </div>
						<div class="form-group">
							<label for="descargas">Cobro Mensual: <input type="text"  style="width : 60px; heigth : 60px" name="descargas" value="$ 558.00"></label>
							<label for="descargas">Meses a Pagar: <input type="number"  style="width : 50px; heigth : 50px" name="descargas" value="6"></label>
							<label for="descargas">Monto a Pagar: <input type="text"  style="width : 70px; heigth : 70px" name="descargas" value="$ 3,348.00"></label>
						</div-->
							<!--
                <label for="inicioProcedimiento"><font color="negro">Inicio de Procedimiento</font></label><br>

                <label for="num_oficioIP">N° de Oficio:</label>
                <input type="text" style="width : 150px; heigth : 150px" name="num_oficioIP">

                <label for="fecha_elaboracion">Fecha de Elaboracion:</label>
                <input type="datetime-local" style="width : 200px; heigth : 200px" name="fecha_elaboracion"> <span class="glyphicon glyphicon-calendar"></span>

                <label for="fecha_recibidoIP">Fecha de Recibido por la Empresa:</label>
                <input type="datetime-local" style="width : 200px; heigth : 200px" name="fecha_recibidoIP"> <span class="glyphicon glyphicon-calendar"></span>
            </div-->
            <div>
        		<button type="submit" class="btn btn-primary">Registrar</button>
        		<a href="{{url('/inicioprocedimiento')}}" class="btn btn-danger">Cancelar</a>
        	</div>
            </input>
            </form>
            @endsection
    @endsection
