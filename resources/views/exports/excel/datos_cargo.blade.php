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
        <th style="width: 100px; height: 31px;text-align:center
       ">Codigo Cargo</th>
        <th style="width: 20%;text-align:center">Fecha de Alta</th>
        <th style="width: 50%;text-align:center">Nombre del Cargo</th>
        <th style="width: 30%;text-align:center">Estado</th>
    </tr>
</thead>
<tbody>
    @foreach($registros as $registro)
    <tr >
        <td style="height: 25px;text-align:center">{{$registro->codigo}}</td>
        <td style="height: 25px;text-align:center">{{$registro->fecha_alta}}</td>
        <td style="height: 25px;">{{$registro->nombre_cargo}}</td>
        <td style="height: 25px;text-align:center">{{$registro->estado}}</td>

    </tr>
    @endforeach
</tbody>
</table>
