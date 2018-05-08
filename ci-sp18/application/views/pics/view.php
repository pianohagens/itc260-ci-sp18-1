<?php
//application/views/pics/view.php

$this->load->view($this->config->item('theme') . 'header');

echo '<br />';
//echo "<div.box style='float: left; '>";
echo "<div style='width:100%; display:flex; flex-flow:row wrap;'>";
foreach ($pics as $pic) 
{
    echo '<div id="boxes" style="max-width:100%;">';
    echo "<div style='width: 300px; height:250px;'>";
    $size = 'm';
    $photo_url = 'http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
    //echo  '</br>';
    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
    echo '</div>';
    echo '<div>';
    echo $pic->title;
    echo '<br />';
    echo $this->config->item('title');
    echo '&nbsp;' . date('m/d/Y');
    echo '</div>';
    echo '</div>';
    
    

}
echo '</div>';  

//     foreach($pics as $pic){
//
//    $size = 'm';
//    $photo_url = '
//    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
//
//    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";

   
     
$this->load->view($this->config->item('theme') . 'footer');
?>