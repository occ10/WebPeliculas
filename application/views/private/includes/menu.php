<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url('private')?>">WebPeliculas Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$this->session->userdata('user')->nombre?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?php echo   site_url('/')  ?> "><i class="fa fa-fw fa-film"></i> Vista pública</a>
                </li>
                <li>
                    <a href="<?php echo   site_url('cerrarSesion')  ?> "><i class="fa fa-fw fa-power-off"></i> Salir</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="<?php echo site_url('private')?>"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#peliculas"><i class="fa fa-file-movie-o"></i> Películas <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="peliculas" class="collapse">
                    <li>
                        <a href="<?php echo site_url('private/listadopeliculas')?>">Gestión</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#participantes"><i class="fa fa-user"></i> Participantes <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="participantes" class="collapse">
                    <li>
                        <a href="<?php echo site_url('private/listadoparticipantes')?>">Gestión</a>
                        <?php //echo anchor('participante/indexPrivada', 'Listado' , 'title="Listado de participantes"'); ?>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#premios"><i class="fa fa-trophy"></i> Premios <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="premios" class="collapse">
                    <li>
                        <a href="<?php echo site_url('private/listadopremios')?>">Gestión</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#peliculaparticipante"><i class="fa fa-film"></i><i class="fa fa-user"></i> Peliculas Participantes <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="peliculaparticipante" class="collapse">
                    <li>
                        <a href="<?php echo site_url('private/listadopeliculaparticipante')?>">Gestión</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('private/formPeliculaParticipante')?>">Insertar Participante Pelicula</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#peliculapremio"><i class="fa fa-film"></i> <i class="fa fa-trophy"></i> Peliculas Premios <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="peliculapremio" class="collapse">
                    <li>
                        <a href="<?php echo site_url('private/listadopeliculapremio')?>">Gestión</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('private/formPeliculaPremio')?>">Insertar Premio Pelicula</a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>