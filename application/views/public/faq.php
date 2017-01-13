<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$this->load->view('public/includes/cabecera');
?>
<!-- faq-banner -->
<div class="faq">
    <h4 class="latest-text w3_faq_latest_text w3_latest_text">FAQ</h4>
    <div class="container">
        <div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title asd">
                        <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Qué encontrará en esta web?
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body panel_text">
                        En esta web encontrará toda la información relacionada con las películas de última actualidad (y también de más antigüedad). Podrá encontrar desde las novedades en cartelera hasta los detalles de cada película (sus participantes, como director/es, actores y actrices, etc.).
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title asd">
                        <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Qué gano registrándome?
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body panel_text">
                        Si te registras en nuestra web tendrás acceso a la votación de todas las películas que hay registradas (son muchas :)) así como también poder dejar tu opinión en cada película que quieras.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //faq-banner -->
<?php
$this->load->view('public/includes/pie');
?>
