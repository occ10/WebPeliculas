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
                    Asignar Premios a Películas
                </h1>
            </div>
        </div>
        <div class="row">
            <?php

            if(isset($msg) && $msg!='') {
                echo $msg;
            }
            ?>
            <form action="asigPeliculaPremio" method="post">
                <div class="form-group">
                    <label for="sel1">Lista de peliculas:</label>

                    <select  name="pelicula" id="pelicula">
                        <?php

                        foreach($result1 as $Resultado) {
                            echo " <option value='" . $Resultado->id . "'> ".$Resultado->id ." - ". $Resultado->titulo . "</option >";
                        }
                        ?>
                    </select>

                </div>
                <div class="form-group">
                    <label for="sel1">Lista de premios</label>
                    <select  name="premio" id="premio">
                        <?php

                        foreach($result2 as $Resultado) {

                            echo " <option value='" . $Resultado->id . "'> " .$Resultado->id ." - ". $Resultado->nombre . "</option >";
                        }
                        ?>

                    </select>

                </div>

                <div class="form-group">
                    <!--<div class="col-sm-offset-2 col-sm-10">-->
                    <input type="submit" value="Asignar" class="btn btn-primary">
                    <!--</div>-->
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->
</div>




<?php
$this->load->view('private/includes/pie');
?>
