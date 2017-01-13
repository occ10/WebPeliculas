<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$this->load->view('public/includes/cabecera');
?>
<!-- single -->
<div class="single-page-agile-main">
    <div class="container">
        <!-- /w3l-medile-movies-grids -->
        <div class="agileits-single-top">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('/')?>">Inicio</a></li>
                <li class="active">Detalle</li>
            </ol>
        </div>
        <div class="single-page-agile-info">
            <!-- /movie-browse-agile -->
            <div class="show-top-grids-w3lagile">
                <div class="col-sm-12 single-left">
                    <div class="song">
                        <div class="song-info">
                            <h4 class="titulo-detalle">THE LEGEND OF TARZAN - Official Trailer 2</h4>
                        </div>
                        <div class="video-grid-single-page-agileits">
                            <div data-video="dLmKio67pVQ" id="video"> <img src="assets/images/5.jpg" alt="" class="img-responsive" /> </div>
                        </div>
                    </div>
                    <div class="song-grid-right">
                        <div class="single-agile-shar-buttons">
                            <div class="row">
                                <div class="col-sm-10">
                                    <ul class="ratings-detalle">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <div class="col-sm-2">
                                    <p class="numeroVotos">Nº Votos: 12345</p>
                                </div>
                            </div>
                            <hr>
                            <h4 class="titulo-detalle">Votación</h4>
                            <select name="votacion">
                                <option value="0">No vista</option>
                                <option value="10">10 - Excelente</option>
                                <option value="9">9 - Muy buena</option>
                                <option value="8">8 - Notable</option>
                                <option value="7">7 - Buena</option>
                                <option value="6">6 - Interesante</option>
                                <option value="5">5 - Pasable</option>
                                <option value="4">4 - Regular</option>
                                <option value="3">3 - Floja</option>
                                <option value="2">2 - Mala</option>
                                <option value="1">1 - Muy mala</option>
                            </select>
                            <hr>
                            <h4 class="titulo-detalle">Género</h4>
                            <div class="panel_text">
                                Aventuras, Acción...
                            </div>
                            <hr>
                            <h4 class="titulo-detalle">Participantes</h4>
                            <div class="panel_text">
                                Director:<br>
                                Actores:
                                ...
                            </div>
                            <hr>
                            <h4 class="titulo-detalle">Descripción</h4>
                            <div class="panel_text">
                                En esta web encontrará toda la información relacionada con las películas de última actualidad (y también de más antigüedad). Podrá encontrar desde las novedades en cartelera hasta los detalles de cada película (sus participantes, como director/es, actores y actrices, etc.).
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="clearfix"> </div>
                    <h4 class="titulo-detalle">Comentarios</h4>
                    <div class="all-comments">
                        <div class="all-comments-info">
                            <div class="agile-info-wthree-box">
                                <form>
                                    <textarea placeholder="Escribe tu mensaje" required=""></textarea>
                                    <input type="submit" value="Enviar">
                                    <div class="clearfix"> </div>
                                </form>
                            </div>
                        </div>
                        <div class="media-grids">
                            <div class="media">
                                <h5>TOM BROWN</h5>
                                <div class="media-left">
                                    <a href="#">
                                        <img src="assets/images/user.jpg" title="One movies" alt=" " />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                                    <span>Fecha/hora: Admin</span>
                                </div>
                            </div>
                            <div class="media">
                                <h5>MARK JOHNSON</h5>
                                <div class="media-left">
                                    <a href="#">
                                        <img src="assets/images/user.jpg" title="One movies" alt=" " />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                                    <span>Fecha/hora: Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-4 single-right">
                    <h3>Up Next</h3>
                    <div class="single-grid-right">
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="assets/images/m1.jpg" alt="" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="assets/images/m2.jpg" alt="" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="assets/images/m3.jpg" alt="" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="assets/images/m4.jpg" alt="" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="assets/images/m5.jpg" alt="" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="assets/images/c5.jpg" alt="" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="assets/images/m6.jpg" alt="" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author">By <a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="assets/images/m15.jpg" alt="" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author">By <a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>-->
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
