<table id="customers">
    <thead>
    @if($type=='excel')
    <tr>
        <th class="xl61" style="text-decoration:underline; text-align: center;height:60px;font-size:18pt;vertical-align:middle" colspan="2">
           {{$report_title}}
        </th>
    </tr>
    @endif
    <tr>
        <th style="width: 20%;height:35px">Año</th>
        <th style="width: 80%;">Plan de Estudio</th>
    </tr>
</thead>
<tbody>
    @foreach($registros as $registro)
    <tr >
        <td style="height: 28px;text-align:center;">{{$registro->anio}}</td>
        <td style="height: 28px">{{$registro->plan_estudio->nombre_plan}}</td>
    </tr>
    @endforeach
</tbody>
</table>
