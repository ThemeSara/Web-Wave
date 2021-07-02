<?php
/**
 * The template for displaying all pages
 * @package web-wave
 * @version 1.0.1
 */
$breadcrumb_type = web_wave_get_option( 'breadcrumb_type' );
global $header_image, $header_style;
 $header_image = get_header_image();
get_header();

  if($breadcrumb_type == 'normal'): 

 ?>

  <!-- Breadcrumb Header -->
      <div class="themesara-breadcrumb" <?php echo $header_style; ?>>
          <div class="container">
              <h1 class="title"><?php the_title(); ?></h1>
              <?php do_action( 'web_wave_breadcrumb_options' ); ?>
          </div>
      </div>
  <!-- /Breadcrumb Header -->
  
<?php endif; ?>

<div class="container">
    <!-- Main Content Area -->
    <section class="section-wrap">
        <div class="row">
             <div <?php if(get_theme_mod('pages_sidebar')==true) : ?> class="col-md-12" <?php else: ?>class="col-md-8 left-block" <?php endif; ?> >
                <div class="ts-author-detail ts-content-box">
                    <?php

                    while ( have_posts() ) : the_post();
        
                        get_template_part( 'template-parts/page/content', 'page' );
        
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
        
                    endwhile; // End of the loop.
                    ?>
                
                       
                </div><!-- ts-author-detail -->
            </div>    

			<?php if(get_theme_mod('pages_sidebar')==false) : ?> 
			
               <div class ="col-md-4">
                   <div class ="sara-sidebar">    
                   
                      <?php get_sidebar(); ?>
                   
                   </div>   
               
               </div>
	
           <?php endif; ?> 
        </div><!-- .row -->
	</div>
</div>
<?php get_footer();