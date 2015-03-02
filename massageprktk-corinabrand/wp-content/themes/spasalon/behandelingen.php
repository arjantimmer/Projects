<?php 
    // Template Name: behandelingen
    ?>
<?php get_template_part('header');?>

<!-- Container for products -->
<div class="container">
    <!-- Main --> 
    <div class="_blank"></div>
    <div class="row-fluid">
        <div class="span4">
			<style type="text/css">
				.menu-item-behandelingen
				{
				  overflow:hidden;  
				  position: relative;
				  display: block;
				  padding: 10px 15px;
				  margin-bottom: -1px;
				  background-color: #fff;
				  border: 1px solid #ddd;
				  border-radius: 4px;
				}
				.menu-item-behandelingen.current-menu-item
				{
				  overflow:hidden;  
				  position: relative;
				  display: block;
				  padding: 10px 15px;
				  margin-bottom: -1px;
				  background-color: #b2a9be;
				  border: 1px solid #ddd;
				  border-radius: 4px;
				}
			</style>
            <?php

				$defaults = array(
					'theme_location'  => '',
					'menu'            => 'behandelingen',
					'container'       => 'div',
					'container_class' => 'menu-behandelingen-container',
					'container_id'    => 'behandelingen',
					'menu_class'      => 'menu-item-behandelingen',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);

				wp_nav_menu( $defaults );
			?>
        </div>
		<div class="span8">
            <?php the_post();?>
            <h2 class="blog_detail_head"><?php the_title(); ?></h2>
            <?php $defalt_arg =array('class' => "full-width-img" )?>
            <?php if(has_post_thumbnail()):?>
            <div class="media" >
                <a href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('', $defalt_arg); ?></a>
            </div>
            <?php endif;?> 
            <!-- if this page is a child of it's parent show button -->
            <?php if($post->post_parent) { ?>
  				<div class="media-body">
                <div class="fullwidth-content">
                    <p><?php the_content(); ?> </p>
					<p>&nbsp;</p>
					<p><button class="btn-primary pull-right" type="button">Ja, ik wil graag een afspraak maken voor de <?php the_title(); ?></button></p>
                </div>
            </div>
			<?php } else { ?>
  				<div class="media-body">
                <div class="fullwidth-content">
                    <p><?php the_content(); ?> </p>
					<p>&nbsp;</p>
                </div>
            </div>
			<?php } ?>
        </div>
    </div>
</div>
<?php get_footer();?>