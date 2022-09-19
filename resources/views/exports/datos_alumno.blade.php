<style>
    th{
        height: 31px;
        background-color:rgb(39, 39, 132);
        color: whitesmoke;
        text-align: center;
    }
</style>

<table>
    <tr>
        <th style="text-align: center;height:60px;font-size:18pt;vertical-align:middle" colspan="9">
            <h1>Reporte de Alumnos</h1>
        </th>
    </tr>
    <tr>
        <th style="width: 70px; height: 31px;
        background-color:blue;color:white!important;
        text-align: center;">Legajo</th>
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
    <tr>
        <td>{{$registro->legajo}}</td>
        <td>{{$registro->libro}}</td>
        <td>{{$registro->folio}}</td>
        <td>{{$registro->persona->documento}}</td>
        <td>{{$registro->persona->apellidos.' '.$registro->persona->nombre}}</td>
        <td>{{$registro->persona->sexo}}</td>
        <td>{{$registro->persona->nacionalidad->nacionalidad}}</td>
        <td>{{$registro->persona->localidad->nacionalidad}}</td>

    </tr>
    @endforeach
</table>
