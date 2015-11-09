 <!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administración</title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!!URL::to('/admin')!!}">Directorio Admin</a>
            </div>
           

            <ul class="nav navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {!!Auth::user()->email!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    @if(Auth::user()->email=='admin@admin.com')
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Usuarios<span class="fa arrow"></span></a>
                            <ul class=" nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>

                                <li>
                                    <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i>Usuarios </a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i>Modalidad<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/tipo/create')!!}"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/tipo')!!}"><i class='fa fa-list-ol fa-fw'></i>Modalidades</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i>Escuelas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/escuela/create')!!}"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/escuela')!!}"><i class='fa fa-list-ol fa-fw'></i>Escuelas</a>
                                </li>
                            </ul>
                        </li>

                       

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
         @yield('content')
        </div>

    </div>
    

     {!!Html::script('js/jquery.min.js')!!}
     {!!Html::script('js/bootstrap.min.js')!!}
     {!!Html::script('js/metisMenu.min.js')!!}
     {!!Html::script('js/sb-admin-2.js')!!}
     @section('scripts')
     @show

</body>

</html>
