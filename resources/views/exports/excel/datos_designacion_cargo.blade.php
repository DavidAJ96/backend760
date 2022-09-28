

<table id="customers">
    <thead>
        @if($type == 'excel')
        <tr>
        <th class="xl61" style="text-decoration:underline; text-align: center;height:60px;font-size:18pt;vertical-align:middle" colspan="6">
        {{$report_title}}
     </th></tr>
     @endif
    <tr>
        <th style="width: 15%;height:35px">Fecha de Alta</th>
        <th style="width: 30%;">Agente</th>
        <th style="width: 30%;">Cargo</th>
        <th style="width: 10%;">Situacion de Revista</th>
        <th style="width: 10%;">Estado</th>
    </tr>
</thead>
<tbody>
    @foreach($registros as $registro)
    <tr >
        <td style="height: 28px;text-align:center">{{date('d-m-Y', strtotime( $registro->fecha_alta));}}</td>
        <td style="height: 28px;">{{$registro->agente->persona->apellidos.' '.$registro->agente->persona->nombre}}</td>
        <td style="height: 28px;">{{$registro->cargo->nombre_cargo}}</td>
        <td style="height: 28px;text-align:center">{{$registro->situacion_revista->descripcion}}</td>
        <td style="height: 28px;text-align:center">{{$registro->estado}}</td>

    </tr>
    @endforeach
</tbody>
</table>
