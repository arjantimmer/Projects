<?php $current_options=get_option('spa_theme_options'); ?>
<div id="container" class="cf">
  <div class="main" role="main">
    <div class="slider">
      <div id="slider" class="flexslider">
        <ul class="slides">
          <li class="slide_content">
            <?php 	if($current_options['home_feature']!='')  ?>
            <!--<img src="<?php echo $current_options['home_feature']; ?>"  alt="Spa Featture" class="main-sliderimg" />-->

          </li>
      </div>
    </div>
  </div>
</div>