<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">
    
        <div id="front-page-slider" class="wrap cf"> 
            //imports a slider from Metaslider plugin
            <?php if(!exists(do_shortcode("[metaslider id=123]")) {
                echo do_shortcode("metaslider id=123")); //replace 123 with id for front-page slider
}
                     ?>
        </div>
        
       <div id="front-page-featured-content" class="featured-content"> //highlights featured content (sticky posts) for front page
            <?php if(!exists(post_type("featured")) {
                         if (have_posts()) : while (have_posts()) : the_post();
                         
                         <?php if (has_post_thumbnail()) the_post_thumbnail(); ?>
           }
           ?>
        </div>
        
        <div id="front-page-content"> //includes regular page content for front-page and front-page sidebar
            
            <?php if(!exists(page_id="home") {
                              if (have_posts()) : while (have_posts()) : the_post();
                             
                             the_content();
                         }
                     ?>
                             
             <?php if(!exists(sidebar_front-page) {
                 get_sidebar();
             }
                      ?>
            
        </div>
        
       <div id="front-page-widget-area"> //includes a second specialty widget area for the front-page
        
        </div>
    
    </div>

</div>

<?php get_footer(); ?>