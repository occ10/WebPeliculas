<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$this->load->view('private/includes/cabecera');
?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Inicio <small>Panel Administrador</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-file-movie-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Películas</div>
                                <div>Listado</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('private/listadopeliculas')?>">
                        <div class="panel-footer">
                            <span class="pull-left">Ver</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Participantes</div>
                                <div>Listado</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('private/listadoparticipantes')?>">
                        <div class="panel-footer">
                            <span class="pull-left">Ver</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-trophy fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Premios</div>
                                <div>Listado</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('private/listadopremios')?>">
                        <div class="panel-footer">
                            <span class="pull-left">Ver</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
<?php
$this->load->view('private/includes/pie');
?>