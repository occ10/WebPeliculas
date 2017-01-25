<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$this->load->view('public/includes/cabecera');
?>

<!-- banner-bottom -->
<div class="banner-bottom">
    <h4 class="latest-text w3_latest_text">Cartelera</h4>
    <div class="container">
        <div class="w3_agile_banner_bottom_grid">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <?php

                foreach ($cartelera as $registro):

                    //Definimos ruta de imagen
                    $rutaImagen = base_url() . "assets/images/sinImagen.jpg";
                    if (file_exists(FCPATH . "assets/images/" . $registro->id . ".jpg"))
                        $rutaImagen = base_url() . "assets/images/" . $registro->id . ".jpg";
                    ?>
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="<?php echo site_url('detallepelicula/'.$registro->id) ?>" class="hvr-shutter-out-horizontal"><img
                                        class="tamanyoImagen" src="<?= $rutaImagen ?>" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo site_url('detallepelicula/'.$registro->id) ?>"><?= $registro->titulo ?></a>
                                    </h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p><?= date("d-m-Y", strtotime($registro->fechaPublicacion)) ?></p>
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
                            <div class="ribben">
                                <p>Cartel</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->

<!-- general -->
<div class="general">
    <h4 class="latest-text w3_latest_text">Próximos estrenos</h4>
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="w3_agile_featured_movies">
                        <?php

                        foreach ($proximosEstrenos as $registro):

                            //Definimos ruta de imagen
                            $rutaImagen = base_url() . "assets/images/sinImagen.jpg";
                            if (file_exists(FCPATH . "assets/images/" . $registro->id . ".jpg"))
                                $rutaImagen = base_url() . "assets/images/" . $registro->id . ".jpg";
                            ?>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo site_url('detallepelicula/' . $registro->id) ?>"
                                   class="hvr-shutter-out-horizontal"><img class="tamanyoImagen"
                                                                           src="<?= $rutaImagen ?>" title="album-name"
                                                                           class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6>
                                            <a href="<?php echo site_url('detallepelicula/' . $registro->id) ?>"><?= $registro->titulo ?></a>
                                        </h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p><?= date("d-m-Y", strtotime($registro->fechaPublicacion)) ?></p>
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
                            </div>
                        <?php endforeach; ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //general -->
<?php
$this->load->view('public/includes/pie');
?>
