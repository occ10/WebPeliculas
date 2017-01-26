<!-- nav -->
<div class="movies_nav">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">

                        <li class="<?php if($this->uri->segment(1)==""){echo "active";}?>"><a href="<?php echo site_url('/')?>">Inicio</a></li>
                        <li class="<?php if($this->uri->segment(1)=="listadopeliculas"){echo "active";}?>"><a href="<?php echo site_url('listadopeliculas')?>">Listado películas</a></li>
                        <li class="<?php if($this->uri->segment(1)=="contacto"){echo "active";}?>"><a href="<?php echo site_url('contacto')?>">Contacto</a></li>
                        <?php

                        if ($this->session->userdata('user') && $this->session->userdata('user')->tipo==1) {
                        ?>
                            <li class="<?php if($this->uri->segment(1)=="private"){echo "active";}?>"><a href="<?php echo site_url('private')?>">Administrar</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //nav -->
<div class="general_social_icons">
    <nav class="social">
        <ul>
            <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
            <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
            <li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
        </ul>
    </nav>
</div>