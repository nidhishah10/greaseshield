 <?php 

//Exit if Directly accessed

if(!defined( 'ABSPATH') ) exit;

/**
 * Template Name: Demo Products Page Template
 *
 * Handles to show about Page Content
 * @since Quest Audio 1.0
 **/

get_header(); 
         // Loop Start Here
        while ( have_posts() ) : the_post();
            // Include the About Page Content template.
            get_template_part( 'page-contents/content','products' );
        endwhile; //end of while  
get_footer();  ?>