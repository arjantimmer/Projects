<?php $current_options=get_option('spa_theme_options'); ?>
<div id="container" class="cf">
  <div class="main" role="main">
    <div class="slider">
      <div id="slider" class="flexslider">
        <ul class="slides">
          <li class="slide_content">
            <?php 	if($current_options['home_feature']!='')  ?>
            <!--<img src="<?php echo $current_options['home_feature']; ?>"  alt="Spa Featture" class="main-sliderimg" />	-->
          </li>
        <div class="slider-thumb-container container">
          <div class="thumb-img-container">
            <?php 	if($current_options['first_thumb_image']!='')  ?>
            <img src="<?php echo $current_options['first_thumb_image']; ?>"  alt="Spa Featture" class="slider-thumb" />
          </div>
          <div class="thumb-img-container">
            <?php 	if($current_options['second_thumb_image']!='')  ?>
            <img src="<?php echo $current_options['second_thumb_image']; ?>"  alt="Spa Featture" class="slider-thumb" />
          </div>
          <div class="thumb-img-container">
            <?php 	if($current_options['third_thumb_image']!='') ?>
            <img src="<?php echo $current_options['third_thumb_image']; ?>"  alt="Spa Featture" class="slider-thumb" />
          </div>
        </div>
        <!-- end of slider Thumbnails images -->
      </div>
    </div>
  </div>
</div>