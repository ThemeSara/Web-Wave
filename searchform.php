<?php
/**
 * Template for displaying search forms in web-wave
 *
 * @package web-wave
 * @version 1.0.1
 */

 $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'web-wave' ); ?></span>
        <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'web-wave' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit">
    	<span class="screen-reader-text">
			<?php echo _x( 'Search', 'submit button', 'web-wave' ); ?>
        </span>
        <i class="fa fa-search" aria-hidden="true"></i>
    </button>
</form>
