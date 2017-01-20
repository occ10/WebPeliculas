<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$this->load->view('public/includes/cabecera');
?>


<div class="contact-agile">
    <div class="faq">
<?php	//echo count($result) ?>
<?php //foreach($result  as $r): ?>
<?php //echo $r->id .' ' . $r->nombre . ' ' . $r->password; ?>


<?php //endforeach; ?>
<?php echo $output; ?>
    </div>
</div>
    
<?php
$this->load->view('public/includes/pie');
?>