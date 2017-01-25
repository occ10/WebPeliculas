
<!DOCTYPE html>
<html lang="es">
<head>
    <title>WebPeliculas</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/images/favicon.png">
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/contactstyle.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/faqstyle.css" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/single.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url();?>assets/css/medile.css" rel='stylesheet' type='text/css' />
    <!-- banner-slider -->
    <link href="<?php echo base_url();?>assets/css/jquery.slidey.min.css" rel="stylesheet">
    <!-- //banner-slider -->
    <!-- pop-up -->
    <link href="<?php echo base_url();?>assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <!-- font-awesome icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- banner-bottom-plugin -->
    <link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items : 5,
                itemsDesktop : [640,4],
                itemsDesktopSmall : [414,3]

            });

        });
    </script>
    <!-- //banner-bottom-plugin -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="w3layouts_logo">
            <a href="<?php echo site_url('/')?>"><h1>Web<span>Películas</span></h1></a>
        </div>
		<?php

		if (!$this->session->userdata('user')){
       echo "<div class='w3l_sign_in_register' > 
           <ul>
                <li><a href='#' data-toggle='modal' data-target='#myModal'>Entrar</a></li>
            </ul>
        </div>";
		}else{
			
        echo "<div class='w3l_sign_in_register' >Bienvenido " . $this->session->userdata('user')->nombre . " | <a href='" . site_url('cerrarSesion') . "' >Cerrar sesión</a>"
            
        . "</div>";
		}
		?>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Login y Registro
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="w3_login_module">
                        <div class="module form-module">
                            <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                                <div class="tooltip">Cambia</div>
                            </div>
                            <div class="form">
                                <h3>Entra con tu cuenta</h3>
                                <form action="<?php echo site_url('login')?>" method="post">
                                    <input type="text" name="nombre" placeholder="Usuario" required="">
                                    <input type="password" name="password" placeholder="Contraseña" required="">
                                    <input type="submit" value="Entrar">
                                </form>
                            </div>
                            <div class="form">
                                <h3>Regístrate con nosotros</h3>
                                <form action="<?php echo site_url('registro')?>" method="post">
                                    <input type="text" name="nombre" placeholder="Usuario" required="">
                                    <input type="password" name="password" placeholder="Contraseña" required="">
                                    <input type="email" name="email" placeholder="Correo electrónico" required="">
                                    <input type="submit" value="Registrar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script>
    $('.toggle').click(function(){
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms
        $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
        }, "slow");
    });
</script>
<!-- //bootstrap-pop-up -->
<?php
$this->load->view('public/includes/menu');
?>