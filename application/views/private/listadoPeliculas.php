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
                    Películas <small>Gestión de películas</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <?php echo $output; ?>
        </div>
    </div>
    <!-- /.row -->
</div>




<?php
$this->load->view('private/includes/pie');
?>
