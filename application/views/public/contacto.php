<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$this->load->view('public/includes/cabecera');
?>
<!-- contact -->
<div class="contact-agile">
    <div class="faq">
        <h4 class="latest-text w3_latest_text">Contacto</h4>
        <div class="container">
            <div class="col-md-5 mail-wthree col-md-offset-1">
                <div class="icon-w3">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
                <h3>Encuéntranos personalmente en Twitter:</h3>
                <h4><a href="#">@ouadi</a> y <a href="#">@manuel</a></h4>
                <hr>
                <h3>Puedes escribirnos a</h3>
                <h4><a href="mailto:admin@webpeliculas.com">admin@webpeliculas.com</a></h4>
            </div>
            <div class="col-md-5 social-w3l">
                <div class="icon-w3">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </div>
                <h3>Redes sociales</h3>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span class="text">Facebook</span></a></li>
                    <li class="twt"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span class="text">Twitter</span></a></li>
                    <li class="ggp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span class="text">Google+</span></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <form action="#" method="post">
                <input type="text" name="nombreContacto" placeholder="Tu nombre y apellidos" required="">
                <input type="text" name="emailContacto" placeholder="Tu email" required="">
                <textarea  name="mensajeContacto" placeholder="Tu mensaje" required=""></textarea>
                <input type="submit" value="Enviar mensaje">
            </form>
        </div>
    </div>
</div>
<!-- //contact -->
<?php
$this->load->view('public/includes/pie');
?>
