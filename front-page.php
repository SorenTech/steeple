<<<<<<< .merge_file_i0SNGL
<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">
    
        <div id="front-page-slider" class="slider m-all t-all d-all"> 
          <?php echo do_shortcode("metaslider id=123"); //replace 123 with id for front-page slider
                     ?>
    </div>
        
       <div id="front-page-featured-content" class="featured-content m-all t-all d-all"> <!-- highlights featured content (sticky posts) for front page -->
            <?php // WP_Query - featured content
                     $args = array(
                         'posts_per_page' => '3',
                         'nopaging'       => true,
                         'tag'            => 'featured',
                     );
                     $custom_query = new WP_Query($args);
                     if ($custom_query->have_posts()) :
                     while($custom_query->have_posts()) :
                        $custom_query->the_post();
                            the_post_thumbnail( 'thumbnail' );
			    the_title();
                    endwhile; else :
                     // not found
                     endif;
                     wp_reset_postdata(); ?>
        </div>
        
        <div id="front-page-content" class="m-all t-all d-all"> <!-- includes regular page content for front-page and front-page sidebar -->
          <div id="front-page-article" class="front-page m-2of3 t-2of3 d-3of4">  
                <?php // WP_Query - front-page content
                     $args = array(
                         'posts_per_page' => '1',
                         'nopaging'       => true,
                         'id'            => '2',
                     );
                     $custom_query = new WP_Query($args);
                     if ($custom_query->have_posts()) :
                     while($custom_query->have_posts()) :
                        $custom_query->the_post();
                            the_title();
                            the_content();
                    endwhile; else :
                     // not found
                     endif;
                     wp_reset_postdata(); ?>
            </div>
            <div id="front-page-content-sidebar" class="front-page m-1of3 t-1of3 d-1of4">
                <?php get_sidebar('front-contentmain'); ?>
            </div>
        </div>
        
       <div id="front-page-widget-area" class="m-all t-all d-all"> <!-- includes a second specialty widget area for the front-page -->
            <?php get_sidebar('front-secondary'); ?>
        </div>
    
    </div>

</div>

=======
<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">
    
        <div id="front-page-slider" class="slider m-all t-all d-all"> 
          <?php echo do_shortcode("metaslider id=123"); //replace 123 with id for front-page slider
                     ?>
    </div>
        
       <div id="front-page-featured-content" class="featured-content m-all t-all d-all"> <!-- highlights featured content (sticky posts) for front page -->
            <?php // WP_Query - featured content
                     $args = array(
                         'posts_per_page' => '3',
                         'nopaging'       => true,
                         'tag'            => 'featured',
                     );
                     $custom_query = new WP_Query($args);
                     if ($custom_query->have_posts()) :
                     while($custom_query->have_posts()) :
                        $custom_query->the_post();
                            the_post_thumbnail( 'thumbnail' );
                            the_title();
                    endwhile; else :
                     // not found
                     endif;
                     wp_reset_postdata(); ?>
        </div>
        
        <div id="front-page-content" class="m-all t-all d-all"> <!-- includes regular page content for front-page and front-page sidebar -->
          <div id="front-page-article" class="front-page m-2of3 t-2of3 d-3of4">  
                <?php // WP_Query - front-page content
                     $args = array(
                         'posts_per_page' => '1',
                         'nopaging'       => true,
                         'id'            => '1',
                     );
                     $custom_query = new WP_Query($args);
                     if ($custom_query->have_posts()) :
                     while($custom_query->have_posts()) :
                        $custom_query->the_post();
                            the_title();
                            the_content();
                    endwhile; else :
                     // not found
                     endif;
                     wp_reset_postdata(); ?>
            </div>
            <div id="front-page-content-sidebar" class="front-page m-1of3 t-1of3 d-1of4">
                <?php get_sidebar('front-contentmain'); ?>
            </div>
        </div>
        
       <div id="front-page-widget-area" class="m-all t-all d-all"> <!-- includes a second specialty widget area for the front-page -->
            <?php get_sidebar('front-secondary'); ?>
        </div>
    
    </div>

</div>

>>>>>>> .merge_file_CKp5if
<?php get_footer(); ?>