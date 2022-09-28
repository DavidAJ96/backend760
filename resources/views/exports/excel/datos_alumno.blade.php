<table id="customers">
    <thead>
        @if($type == 'excel')
        <tr>
        <th class="xl61" style="text-decoration:underline; text-align: center;height:60px;font-size:18pt;vertical-align:middle" colspan="6">
        {{$report_title}}
     </th></tr>
     @endif

    <tr>
        <th style="width: 10%; height: 31px;
       ">Legajo</th>

        <th style="width: 10%;height:35px">Documento</th>
        <th style="width: 20%;">Apellido y Nombre</th>
        <th style="width: 10%;">Genero</th>
        <th style="width: 20%;">Domicilio</th>
        <th style="width: 15%;">Localidad</th>
    </tr>
</thead>
<tbody>
    @foreach($registros as $registro)
    <tr >
        <td style="height: 28px;text-align:center">{{$registro->legajo}}</td>
        <td style="height: 28px;text-align:center">{{$registro->persona->documento}}</td>
        <td style="height: 28px;">{{$registro->persona->apellidos.' '.$registro->persona->nombre}}</td>
        <td style="height: 28px;text-align:center">{{$registro->persona->sexo}}</td>
        <td style="height: 28px;">{{$registro->persona->calle." ".$registro->persona->altura." ".$registro->persona->piso." ".$registro->persona->depto}}</td>
        <td style="height: 28px;text-align:center">{{$registro->persona->localidad->localidad}}</td>

    </tr>
    @endforeach
</tbody>
</table>
