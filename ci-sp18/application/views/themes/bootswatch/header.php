<!DOCTYPE html>
<html lang="en">
  <head>
	<title><?=$this->config->item('title')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap themes use style settings to change look and feel -->
    <link rel="stylesheet" href="<?=base_url()?>public/themes/bootswatch/css/<?=$this->config->item('style')?>" media="screen">
	
    <link rel="stylesheet" href="<?=base_url()?>public/themes/bootswatch/css/bootswatch.min.css">
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">  </script>
    <![endif]-->
  </head>
  <body>
     <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?=base_url() . 'pics/view/cows'?>" class="navbar-brand"><?=$this->config->item('title')?></a>
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
<!--			<li class="active"><a href="#" title="">Active Link</a></li>              -->
<!--			<li><//?=//anchor('news/create','Creat News')?></li>-->
              
              <li><?=anchor('pics/flower','Flower')?></li>
              <li><?=anchor('pics/pigs','Pigs')?></li>
              <li><?=anchor('pics/dogs','Dogs')?></li>
			
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
    <?php
    echo bootswatchFeedback();
    ?>

