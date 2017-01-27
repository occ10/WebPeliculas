<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$this->load->view('public/includes/cabecera');
?>

<script>

    $(document).ready(function () {

        $('#votacion').on('change', function() {
            $("#formVotacion").submit()
        })
    });

</script>
<!-- single -->
<div class="single-page-agile-main">
    <div class="container">
        <!-- /w3l-medile-movies-grids -->
        <div class="agileits-single-top">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('/') ?>">Inicio</a></li>
                <li class="active">Detalle</li>
            </ol>
        </div>
        <div class="single-page-agile-info">
            <!-- /movie-browse-agile -->
            <div class="show-top-grids-w3lagile">
                <div class="col-sm-12 single-left">
                    <div class="row">
                        <div class="song-info col-sm-8">
                            <h4 class="titulo-detalle"><b><?= $pelicula->titulo ?></b></h4>
                            <div class="song-grid-right">
                                <div class="single-agile-shar-buttons">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <ul class="ratings-detalle">
                                                <?php
                                                //Calculamos nota en base 5
                                                $nota = round($votaciones->voto * 5 / 10, 0);
                                                for ($i = 0; $i < $nota; $i++):?>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <?php endfor;
                                                $notaRestante = 5 - $nota;
                                                for ($i = 0; $i < $notaRestante; $i++):?>
                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                <?php endfor;
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="numeroVotos"><b>Nº Votos:</b> <?= $votaciones->numeroVotos ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="titulo-detalle">Descripción</h4>
                                    <div class="panel_text">
                                        <?= $pelicula->sinopsis ?>
                                    </div>
                                    <hr>
                                    <h4 class="titulo-detalle">Votación</h4>

                                    <?php if ($this->session->userdata('user')){
                                        $checked = "selected='selected'";
                                        ?>

                                    <form id="formVotacion" action="<?php echo site_url('votacion')?>" method="post">
                                        <select name="votacion" id="votacion">
                                            <option value="0" >No vista</option>
                                            <option value="10" <?=(isset($usuarioVotacion) && (int)$usuarioVotacion->voto == 10)? $checked:""?>>10 - Excelente</option>
                                            <option value="9" <?=(isset($usuarioVotacion) && $usuarioVotacion->voto == 9)? $checked:""?>>9 - Muy buena</option>
                                            <option value="8" <?=(isset($usuarioVotacion) && $usuarioVotacion->voto == 8)? $checked:""?>>8 - Notable</option>
                                            <option value="7" <?=(isset($usuarioVotacion) && $usuarioVotacion->voto == 7)? $checked:""?>>7 - Buena</option>
                                            <option value="6" <?=(isset($usuarioVotacion) && $usuarioVotacion->voto == 6)? $checked:""?>>6 - Interesante</option>
                                            <option value="5" <?=(isset($usuarioVotacion) && $usuarioVotacion->voto == 5)? $checked:""?>>5 - Pasable</option>
                                            <option value="4" <?=(isset($usuarioVotacion) && $usuarioVotacion->voto == 4)? $checked:""?>>4 - Regular</option>
                                            <option value="3" <?=(isset($usuarioVotacion) && $usuarioVotacion->voto == 3)? $checked:""?>>3 - Floja</option>
                                            <option value="2" <?=(isset($usuarioVotacion) && $usuarioVotacion->voto == 2)? $checked:""?>>2 - Mala</option>
                                            <option value="1" <?=(isset($usuarioVotacion) && $usuarioVotacion->voto == 1)? $checked:""?>>1 - Muy mala</option>
                                        </select>
                                        <input type="hidden" name="pelicula" value="<?= $pelicula->id?>">
                                        <div class="clearfix"></div>
                                    </form>
                                    <?php } else{ ?>
                                        <div class="panel_text">
                                            No puedes votar. <a href='#' data-toggle='modal' data-target='#myModal'>Inicia sesión/regístrate</a> para ello.
                                        </div>

                                    <?php } ?>
                                    <hr>
                                    <h4 class="titulo-detalle">Género</h4>
                                    <div class="panel_text">
                                        <?php
                                        foreach ($generos as $genero) {
                                            echo $genero->nombre . "<br>";
                                        }
                                        ?>
                                    </div>
                                    <hr>
                                    <h4 class="titulo-detalle">Participantes</h4>
                                    <div class="panel_text">
                                        <?php
                                        foreach ($participantes as $participante) {
                                            echo "<b>" . $participante->tipoParticipante . "</b>: " . $participante->nombre . " " . $participante->apellidos . "<br>";
                                        }
                                        ?>
                                    </div>
                                    <hr>
                                    <h4 class="titulo-detalle">Premios</h4>
                                    <div class="panel_text">
                                        <?php
                                        if(count($premios)==0) echo "Sin premios";
                                        foreach ($premios as $premio) {
                                            echo $premio->nombre."<br>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        //Definimos ruta de imagen
                        $rutaImagen = base_url() . "assets/images/sinImagen.jpg";
                        if (file_exists(FCPATH . "assets/images/" . $pelicula->id . ".jpg"))
                            $rutaImagen = base_url() . "assets/images/" . $pelicula->id . ".jpg";

                        ?>

                        <div class="col-sm-4 video-grid-single-page-agileits">
                            <div><img src="<?= $rutaImagen ?>" alt="" class="img-responsive"/></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                    <h4 class="titulo-detalle">Comentarios <?=(count($comentarios > 0)? "(".count($comentarios).")" : "")?></h4>
                    <?php
                    if ($this->session->userdata('user')){ ?>
                        <div class="all-comments-info">
                            <div class="agile-info-wthree-box">
                                <form action="<?php echo site_url('comentario')?>" method="post">
                                    <textarea name="comentario" placeholder="Escribe tu mensaje" required=""></textarea>
                                    <input type="hidden" name="pelicula" value="<?= $pelicula->id?>">
                                    <input type="submit" value="Enviar">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    <?php } else{ ?>
                        <div class="panel_text">
                            No puedes comentar. <a href='#' data-toggle='modal' data-target='#myModal'>Inicia sesión/regístrate</a> para ello.
                        </div>
                    <?php }?>
                    <div class="all-comments">

                        <div class="media-grids">
                            <?php
                            echo (count($comentarios) == 0)? "Sin comentarios. ¡Sé el primero!" : "";
                            foreach ($comentarios as $comentario):?>

                                <div class="media">
                                    <h5><?= $comentario->texto ?></h5>
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/images/user.jpg" title="<?=$comentario->nombre?>"
                                                 alt=" "/>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p><?= strtoupper($comentario->nombre) ?></p>
                                        <span>Fecha/hora: <?= date("d-m-Y H:i:s", strtotime($comentario->fechahora)) ?></span>
                                    </div>
                                </div>
                            <?php endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- //movie-browse-agile -->
        </div>
        <!-- //w3l-latest-movies-grids -->
    </div>
</div>
<!-- //w3l-medile-movies-grids -->
<?php
$this->load->view('public/includes/pie');
?>
