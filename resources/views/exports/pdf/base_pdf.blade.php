
<html>
    <head>
        <style>
         /** Define the margins of your page **/
         /** Define the margins of your page **/
         @page {
                margin: 150px 25px;
            }

        header{
                position: fixed;
                top: -120px;
                left: 0px;
                right: 0px;
                height: 100px;
            }
            .miheader {
                /** Extra personal styles **/
                height: 50px;
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
                bottom: -120px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }
            #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;

  font-size:10pt;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2F75B5;
  color: white;
}
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        @include('exports.pdf.layout_pdf')

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            @include($viewToExport)
        </main>
    </body>
</html>
