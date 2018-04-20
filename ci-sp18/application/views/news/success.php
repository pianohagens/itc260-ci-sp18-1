<?php
//application/views/news/success.php

$this->load->view($this->config->item('theme') . 'header');

?>

<h2>Success Page</h2>
<h1>Success!</h1>
<p>This is Success page </p>
<p><b style="color:red;">A News Item has been Created Successful! </b></p>
<p>You are currently on the Success page </p>
<p>You are currently on the Success page </p>


<?php
$this->load->view($this->config->item('theme') . 'footer');
?>