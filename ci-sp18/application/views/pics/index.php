<?php
//application/views/pics/index.php
$this->load->view($this->config->item('theme') . 'header');
?>
<?php
echo '<h2>Picture Categories</h2>';
echo '<h3><a href="' . site_url('pics/' . 'Cows') . '">' . 'Cows </a></h3>';
echo '<h3><a href="' . site_url('pics/' . 'Flowers') . '">' . 'Flowers </a></h3>';
echo '<h3><a href="' . site_url('pics/' . 'Dogs') . '">' . 'Dogs </a></h3>';
echo '<h3><a href="' . site_url('pics/' . 'Pigs') . '">' . 'Pigs </a></h3>';
?>


<?php
$this->load->view($this->config->item('theme') . 'footer');
?>