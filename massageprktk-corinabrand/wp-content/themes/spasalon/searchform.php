<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="cmt_input_bg"  name="s" id="s" placeholder="<?php esc_attr_e( "Zoeken", 'sis_spa' ); ?>" />
	<input type="submit" class="sidebar-btn" id="spa_search_form_btn" name="submit" value="<?php esc_attr_e( "Zoeken", 'sis_spa' ); ?>" />
</form>