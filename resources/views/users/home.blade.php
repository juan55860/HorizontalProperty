<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Multifamiliar Fundadores</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/templatemo_main.css">
    <!--
    Dashboard Template
    http://www.templatemo.com/preview/templatemo_415_dashboard
    -->
</head>
<body>
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <div class="logo"><h1>Multifamiliar Fundadores - Administrador</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
</div>
<div class="template-page-wrapper">
    <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
            <li>
                <form class="navbar-form">
                    <input type="text" class="form-control" id="templatemo_search_box" placeholder="Buscar...">
                    <span class="btn btn-default">Ir</span>
                </form>
            </li>
            <li class="active"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="sub open">
                <a href="javascript:;">
                    <i class="fa fa-database"></i> Deudas <div class="pull-right"></div>
                </a>
                <ul class="templatemo-submenu">
                    <li><a href="#">Administración</a></li>
                    <li><a href="#">Mantenimiento</a></li>
                    <li><a href="#">Seguro</a></li>
                    <li><a href="#">Papeleria</a></li>
                    <li><a href="#">Agua</a></li>
                    <li><a href="#">Energía</a></li>
                    <li><a href="#">Citofonía</a></li>
                    <li><a href="#">Aseo</a></li>
                    <li><a href="#">Vigilancia</a></li>
                    <li><a href="#">Bienestar Social</a></li>
                    <li><a href="#">Dian</a></li>
                    <li><a href="#">Otros</a></li>
                </ul>
            </li>
            <li class="sub open">
                <a href="javascript:;">
                    <i class="fa fa-database"></i> Pagos <div class="pull-right"></div>
                </a>
                <ul class="templatemo-submenu">
                    <li><a href="#">Administración</a></li>
                    <li><a href="#">Seguro</a></li>
                    <li><a href="#">Salón</a></li>
                    <li><a href="#">Extraordinaria</a></li>
                    <li><a href="#">Multa incumplimiento</a></li>
                    <li><a href="#">Parqueadero</a></li>
                    <li><a href="#">Otros</a></li>
                </ul>
            </li>
            <li class="sub open">
                <a href="javascript:;">
                    <i class="fa fa-database"></i> Reportes <div class="pull-right"></div>
                </a>

            </li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
    </div><!--/.navbar-collapse -->

    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">

            <h1>Pagina Inicial</h1>
            <p>Bienvenido *bname*.</p>

            <div class="margin-bottom-30">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#">Home </a></li>
                            <li class="active"><a href="#">Profile</a></li>
                            <li class="active"><a href="#">Messages</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="templatemo-progress">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Latest Data</h4>
                            </a>
                            <a href="#" class="list-group-item">
                                <p class="list-group-item-text">Las tablas podrian aparecer en la interfaz que va a administracion y el manejo de propietarios, y en la pagina inicio deberia salir el nombre del usuario activo .</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="templatemo-panels">
                <div class="row">

                    <div class="col-md-6 col-sm-6 margin-bottom-30">
                        <div class="panel panel-primary">
                            <div class="panel-heading">User Table</div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Bloque</th>
                                        <th>Apartamento</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>101</td>
                                        <td>Uriel</td>
                                        <td>Henao</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>102</td>
                                        <td>Mabel</td>
                                        <td>Pineda</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <span class="btn btn-primary"><a href="tables.html">Ver Tablas</a></span>
                    </div>
                </div>
                <div class="row">


                    <div class="col-md-6 col-sm-6">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Accordion Item 1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        ore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
                </div>
                <div class="modal-footer">
                    <a href="sign-in.html" class="btn btn-primary">Yes</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="templatemo-footer">
        <div class="templatemo-copyright">
            <p>2015 MultiFundadores</p>
        </div>
    </footer>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/templatemo_script.js"></script>
<script type="text/javascript">
    // Line chart
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
            {
                label: "My First dataset",
                fillColor : "rgba(220,220,220,0.2)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                pointHighlightFill : "#fff",
                pointHighlightStroke : "rgba(220,220,220,1)",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            },
            {
                label: "My Second dataset",
                fillColor : "rgba(151,187,205,0.2)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                pointHighlightFill : "#fff",
                pointHighlightStroke : "rgba(151,187,205,1)",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            }
        ]

    }

    window.onload = function(){
        var ctx_line = document.getElementById("templatemo-line-chart").getContext("2d");
        window.myLine = new Chart(ctx_line).Line(lineChartData, {
            responsive: true
        });
    };

    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    $('#loading-example-btn').click(function () {
        var btn = $(this);
        btn.button('loading');
        // $.ajax(...).always(function () {
        //   btn.button('reset');
        // });
    });
</script>
</body>
</html>