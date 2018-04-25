<?php
//application/views/news/success.php

$this->load->view($this->config->item('theme') . 'header');

?>

<p><b style="color:red;">A News has been Created Successfully! </b></p>

<?php
$this->load->view($this->config->item('theme') . 'footer');
?>