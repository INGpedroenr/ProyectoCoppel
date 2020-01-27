<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Establecimientos</title>
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
<h1 class="encabezado">Lista de Establecimientos</h1>
    <div class="text-center">
    <table class="table table-striped">
        <thead>
        <tr>
            <th><font color="negro">Razon Social</font></th>
					@foreach($establecimientos as $e)
						{{$e->razon_social}}
					@endforeach
			</tr>
		</table>
    </div>
        <script type="text/javascript">
            setTimeout(function() {
                $(".alert").fadeOut(1500);
            },1500);
        </script>
</body>
</html>
