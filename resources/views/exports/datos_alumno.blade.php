<style>
    th{
        background-color:teal;color:white;
        text-align: center;
    }
    .xl61
	{mso-style-parent:style0;
	font-size:18.0pt;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
    .style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border:none;
	mso-style-name:Normal;
	mso-style-id:0;}
</style>

<table>
    <tr>
        <th class="xl61" style="text-align: center;height:60px;font-size:18pt;vertical-align:middle" colspan="9">
           Reporte de Alumnos
        </th>
    </tr>
    <tr>
        <th style="width: 70px; height: 31px;
       ">Legajo</th>
        <th style="width: 70px;">Libro</th>
        <th style="width: 70px;">Folio</th>
        <th style="width: 80px;">Documento</th>
        <th style="width: 300px;">Apellido y Nombre</th>
        <th style="width: 70px;">Genero</th>
        <th style="width: 120px;">Nacionalidad</th>
        <th style="width: 120px;">Domicilio</th>
        <th style="width: 120px;">Localidad</th>
    </tr>
    @foreach($registros as $registro)
    <tr >
        <td style="height: 28px;">{{$registro->legajo}}</td>
        <td style="height: 28px;">{{$registro->libro}}</td>
        <td style="height: 28px;">{{$registro->folio}}</td>
        <td style="height: 28px;">{{$registro->persona->documento}}</td>
        <td style="height: 28px;">{{$registro->persona->apellidos.' '.$registro->persona->nombre}}</td>
        <td style="height: 28px;">{{$registro->persona->sexo}}</td>
        <td style="height: 28px;">{{$registro->persona->nacionalidad->nacionalidad}}</td>
        <td style="height: 28px;">{{$registro->persona->localidad->nacionalidad}}</td>

    </tr>
    @endforeach
</table>
