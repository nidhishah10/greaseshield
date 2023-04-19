 <?php 

//Exit if Directly accessed

if(!defined( 'ABSPATH') ) exit;

/**
 * Template Name: Certificate Page Template
 *
 * Handles to show certificate Page Content
 * @since Quest Audio 1.0
 **/

get_header(); 
         // Loop Start Here
        while ( have_posts() ) : the_post();
            // Include the Certificate Page Content template.
            get_template_part( 'page-contents/content','certificate' );
        endwhile; //end of while  
get_footer();  ?>