<?php
/**
 * The template for displaying all pages
 * @package web-wave
 * @version 1.0.1
 */
 global $header_image, $header_style;
    $header_image = get_header_image();
 
    if( $header_image ){
        $header_style = 'style="background-image: url('.esc_url( $header_image ).');"';                 

    } else{

        $header_style = '';
}
 
get_header(); ?>

<!-- Breadcrumb Header -->
    <div class="themesara-breadcrumb" <?php echo $header_style; ?>>
        <div class="container">
            <h1 class="title"><?php echo esc_html__('Store','web-wave'); ?></h1>
            <?php do_action( 'web_wave_breadcrumb_options' ); ?>
        </div>
    </div>
<!-- /Breadcrumb Header -->
<div class="container">
    <!-- Main Content Area -->
    <section class="section-wrap">
        <div class="row">
             <div  class="col-md-12">
                <div class="ts-author-detail ts-content-box">
                  <?php if (have_posts()) :
                        woocommerce_content();
                    endif;
                    ?>
                       
                </div><!-- Ts-author-detail -->
            </div>    

        </div><!-- .row -->
	</div>
</div>
<?php get_footer();