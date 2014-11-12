<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tarea Ayudantia</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Crud Laravel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Crud <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
        
                    <li id="lateral_listar" onclick="return prueba('lateral_listar');">
                        <a href="./listar"> Mostrar </a>
                    </li>
                    <li id="lateral_nuevo" onclick="return prueba('lateral_nuevo');">
                        <a href="./nuevo"> Crear </a>
                    </li>

                    <li id="lateral_detalles" onclick="return prueba('lateral_detalles');">
                        <a href="./detalles">Detalles - Modificar - Borrar </a>
                    </li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    

        <div id="page-wrapper">

            <div class="container">

                <!-- Page Heading -->
                <div class="row">                    
                    
                 
                                       
                </div>
                <!-- /.row -->
                <div>
                        @yield('mostrar')
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>


    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Propios JavaScript -->
    <script src="js/validaciones.js"></script>
    <!-- Test JavaScript -->
    <script>
        function prueba(id){
            $("#lateral_inicio").class("inactive");
            $("#lateral_listar").class("inactive");
            $("#lateral_nuevo").class("inactive");
            $("#lateral_detalles").class("inactive");
            $("#"+id).class("active");            
        };
    </script>
    
</body>

</html>