<html>
    <head>
        <style>
            /** Define the margins of your page **/
            @page {
                margin: 100px 25px;
            }

            header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }

            table{
                width:100%;
            }

            footer {
                position: fixed;
                bottom: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            Our Code World
        </header>

        <footer>
            Copyright &copy; <?php echo date("Y");?>
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <table>

                <tr>
                    <th style="width: 70px;height:35px">Año</th>
                    <th style="width: 420px;">Plan de Estudio</th>
                </tr>
                @foreach($registros as $registro)
                <tr >
                    <td style="height: 28px;text-align:center;">{{$registro->anio}}</td>
                    <td style="height: 28px">{{$registro->plan_estudio->nombre_plan}}</td>
                </tr>
                @endforeach
            </table>

        </main>
    </body>
</html>

