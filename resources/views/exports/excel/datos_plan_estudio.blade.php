<style>
    th{
        background-color:teal;color:white;
        text-align: center;
    }

</style>

<table id="customers">
    <thead>

        @if($type=='excel')
        <tr>
            <th class="xl61" style="text-decoration:underline; text-align: center;height:60px;font-size:18pt;vertical-align:middle" colspan="4">
               {{$report_title}}
            </th>
        </tr>
        @endif

    <tr>
        <th style="width: 100px; height: 31px;
       ">Codigo Espacio</th>
        <th style="width: 40%">Espacio Curricular</th>
        <th style="width: 20%">Año</th>
        <th style="width: 40%">Plan de Estudio</th>
    </tr>
</thead>
<tbody>
    @foreach($registros as $registro)
    <tr >
        <td style="height: 25px;text-align:center">{{$registro->cod_espacio}}</td>
        <td style="height: 25px">{{$registro->espacio_curricular}}</td>
        <td style="height: 25px;text-align:center">{{$registro->anio_escolar->anio}}</td>
        <td style="height: 25px;">{{$registro->anio_escolar->plan_estudio->nombre_plan}}</td>

    </tr>
    @endforeach
</tbody>
</table>
