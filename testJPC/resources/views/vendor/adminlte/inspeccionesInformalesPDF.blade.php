<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Visita de Inspeccion</title>
	<style>
		.encabezado{
			color: white;
			background-color: black;
		}
	</style>
</head>
<body>
	<div class="title">
	<img src="img/japacLogo.png" width="150px" alt="150px">
	<h2 ALIGN=center>Junta Municipal de Agua Potable y Alcatarillado de Culiacan.</h2>
	<h3 ALIGN=center>Blvd. Rolando Arjona Amabilis 2571 Nte.</h3>
	<h3 ALIGN=center>Col. Congreso del Estado. C.P.:80020 </h3>
	</div>
<h1 class="encabezado">Lista de Visitas de Inspeccion</h1>
    <div class="text-center">
    <table class="table table-striped">
        <thead>
        <tr>
            <th><font color="negro">N° de Infraccion</font></th>
            <th><font color="negro">Establecimiento</font></th>
            <th><font color="negro">Actividad</font></th>
            <th><font color="negro">Fecha de la Infraccion</font></th>
            <th><font color="negro">N° y Nombre del Inspector</font></th>
        </tr>
            <tr>
						@foreach($i_informales as $i)
						<td>{{$i->num_infraccion}}</td>
						<td>{{$i->nombre_establecimiento}}</td>
						<td>{{$i->actividad}}</td>
						<td>{{$i->fecha_inspeccion_informal}}</td>
						<td>{{$i->num_inspector}} - {{$i->nombre_inspector}}</td>
						@endforeach
            </tr>
        </thead>
    </table
    <div class="text-center">

    </div>
        <script type="text/javascript">
            setTimeout(function() {
                $(".alert").fadeOut(1500);
            },1500);
        </script>
</body>
</html>
