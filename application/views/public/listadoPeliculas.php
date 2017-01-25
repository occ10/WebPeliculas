<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$this->load->view('public/includes/cabecera');
?>
<!-- /w3l-medile-movies-grids -->
<div class="general-agileits-w3l">
    <div class="w3l-medile-movies-grids">

        <!-- /movie-browse-agile -->

        <div class="movie-browse-agile">
            <!--/browse-agile-w3ls -->
            <div class="browse-agile-w3ls general-w3ls">
                <div class="tittle-head">
                    <h4 class="latest-text">Listado de películas </h4>
                    <div class="container">
                        <div class="agileits-single-top">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('/')?>">Inicio</a></li>
                                <li class="active">Listado Películas</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="browse-inner">
                        <?php

                        foreach($listado as $registro):

                            //Definimos ruta de imagen
                            $rutaImagen = base_url()."assets/images/sinImagen.jpg";
                            if(file_exists(FCPATH."assets/images/".$registro->id.".jpg"))
                                $rutaImagen = base_url()."assets/images/".$registro->id.".jpg";

                            ?>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo site_url('detallepelicula/'.$registro->id)?>" class="hvr-shutter-out-horizontal"><img class="tamanyoImagen" src="<?=$rutaImagen?>" title="album-name" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo site_url('detallepelicula/'.$registro->id)?>"><?=$registro->titulo?></a></h6>
                                    </div>
                                    <div class="mid-2">

                                        <p><?=date("d-m-Y", strtotime($registro->fechaPublicacion))?></p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <?php
                                                $encontrado = false;
                                                for($i=0;$i<count($votaciones) && !$encontrado;$i++){
                                                    if($votaciones[$i]->pelicula == $registro->id){
                                                        $encontrado = true;
                                                        //Calculamos nota en base 5
                                                        $nota = round($votaciones[$i]->voto * 5 / 10, 0);
                                                        for ($i = 0; $i < $nota; $i++):?>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <?php endfor;
                                                        $notaRestante = 5 - $nota;
                                                        for ($i = 0; $i < $notaRestante; $i++):?>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <?php endfor;
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                                <?php if($registro->cartelera == 1): ?>
                                <div class="ribben">
                                    <p>Cartel</p>
                                </div>
                                <?php endif; ?>
                            </div>

                        <?php endforeach; ?>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //movie-browse-agile -->
    </div>
    <!-- //w3l-medile-movies-grids -->
</div>
<!-- //comedy-w3l-agileits -->
<?php
$this->load->view('public/includes/pie');
?>
