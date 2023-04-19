<?php 

//Exit if Directly accessed

if(!defined( 'ABSPATH') ) exit;

/**
 * Template Name: Home Video Page Template
 *
 * Handles to show home Page Content
 * @since Quest Audio 1.0
 **/

get_header(); 
         // Loop Start Here
        while ( have_posts() ) : the_post();
            // Include the Home Page Content template.
            get_template_part( 'page-contents/content','home-video' );
        endwhile; //end of while  
get_footer();  ?>