<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de notas - Alumno</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="assets/css/P2.Nota.Curso.Alumno.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <?php require_once('includes/sidebar_padre.php') ?>
    <div>
        <div class="container bootstrap snippets bootdey" style="padding-top: 100px; padding-bottom: 100px;">
            <div class="row" style="background: #FFFFFF; border-radius:20px;">
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <h1>Curso:'Curso'</h1>
                                <h2>Grado:'Grado'</h2>
                                <h2>Tabla de Notas</h2>
                                <table class="table user-list">
                                    <thead>
                                        <tr>
                                            <th><span>MES</span></th>
                                            <th class="text-center"><span>NOTA 1</span></th>
                                            <th class="text-center"><span>NOTA 2</span></th>
                                            <th class="text-center"><span>NOTA 3</span></th>
                                            <th class="text-center"><span>NOTA 4</span></th>
                                            <th class="text-center"><span>PROMEDIO</span></th>
                                            <th class="text-center"><span>ESTADO</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:196px;">
                                                <span class="user-subhead">Marzo</span>
                                            </td>
                                            <td class="text-center" ;>
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center" style="width:20%;">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="htt://sitioweb.com/a"><button class="btn btn-info"
                                                        style="background: #48BB48; color: #FFFFFF; border: #666;">Aprobado</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-subhead">Abril</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">10</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="htt://sitioweb.com/a"><button class="btn btn-info"
                                                        style="background: #E82929; color: #FFFFFF; border: #666;">Desaprobado</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-subhead">Mayo</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="htt://sitioweb.com/a"><button class="btn btn-info"
                                                        style="background: #48BB48; color: #FFFFFF; border: #666;">Aprobado</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-subhead">Junio</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">11</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="htt://sitioweb.com/a"><button class="btn btn-info"
                                                        style="background: #48BB48; color: #FFFFFF; border: #666;">Aprobado</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-subhead">Julio</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">10</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="htt://sitioweb.com/a"><button class="btn btn-info"
                                                        style="background: #E82929; color: #FFFFFF; border: #666;">Desaprobado</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>                                                     
                                                <span class="user-subhead">Agosto</span>
                                            </td>
                                            <td class="text-center" >
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center" >
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="htt://sitioweb.com/a"><button class="btn btn-info" style="background: #696F79; color: #FFFFFF; border: #666;">En espera</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>                                                     
                                                <span class="user-subhead">Setiembre</span>
                                            </td>
                                            <td class="text-center" >
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center" >
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center" >
                                                <a href="htt://sitioweb.com/a"><button class="btn btn-info" style="background: #696F79; color: #FFFFFF; border: #666;">En espera</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>                                                     
                                                <span class="user-subhead">Octubre</span>
                                            </td>
                                            <td class="text-center" >
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center" >
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center" >
                                                <a href="htt://sitioweb.com/a"><button class="btn btn-info" style="background: #696F79; color: #FFFFFF; border: #666;">En espera</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>                                                     
                                                <span class="user-subhead">Noviembre</span>
                                            </td>
                                            <td class="text-center" >
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center" >
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="htt://sitioweb.com/a"><button class="btn btn-info" style="background: #696F79; color: #FFFFFF; border: #666;">En espera</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>                                                     
                                                <span class="user-subhead">Diciembre</span>
                                            </td>
                                            <td class="text-center" >
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center" >
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">--</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="htt://sitioweb.com/a"><button class="btn btn-info" style="background: #696F79; color: #FFFFFF; border: #666;">En espera</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th ><span>PROMEDIO FINAL</span></th>
                                            <th class="text-center" >&nbsp;</th>
                                            <th class="text-center" >&nbsp;</th>
                                            <th class="text-center" >&nbsp;</th>
                                            <th class="text-center" >&nbsp;</th>                                                
                                            <th class="text-center" ><span>--</span></th>                      
                                            <th class="text-center" ><span>En Espera</span></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/sidebar.js"></script>
</body>

</html>