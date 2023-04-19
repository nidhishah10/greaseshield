<?php 
//Exit if Directly accessed
if(!defined( 'ABSPATH') ) Exit;
/**
* The Template Used For Displaying About page Content
*
* @package WordPress
* @subpackage Quest Audio
* @since Quest Audio 1.0
*/
?>


    <!-- Inner Top Banner section start -->
        <?php $banner_title = get_field('banner_title'); ?>
        <?php if( isset($banner_title) && !empty($banner_title) ) : //to check site Logo ?>
        <div class="inner-top-banner-sec gradient-top-right">
          <div class="wrap">
              <div class="top-banner-details about-top">
                  <h1 data-sal="slide-up" data-sal-delay="50" data-sal-duration="700"><?php echo $banner_title?></h1>
              </div>
          </div>
        </div>
        <?php endif; //endif ?>
        <!-- Inner Top Banner section end -->

        <div id="main">
            <!-- about-details-sec section start -->
            <div class="about-details-sec">
              <div class="wrap">
                <div class="about-details-inner">
                  <div class="details" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
                    <?php $what_we_do_title = get_field('what_we_do_title'); ?>
        <?php if( isset($what_we_do_title) && !empty($what_we_do_title) ) : //to check site Logo ?>
                    <h4><?php echo $what_we_do_title?></h4>
                    <?php endif; //endif ?>

                    <?php $what_we_do_content = get_field('what_we_do_content'); ?>
                    <?php if( isset($what_we_do_content) && !empty($what_we_do_content) ) : //to check site Logo ?>
                    <?php echo $what_we_do_content; ?>
                    <?php endif; //endif ?>

                  </div>
                  <?php 
                  $what_we_do_image = get_field('what_we_do_image'); 
                  $what_we_do_video_url = get_field('what_we_do_video_url'); 
                  ?>
                  <?php if( isset($what_we_do_image) && !empty($what_we_do_image) &&  isset($what_we_do_video_url) && !empty($what_we_do_video_url)) : //to check site Logo ?>
                  <div class="about-details-img" data-sal="slide-up" data-sal-delay="80" data-sal-duration="900">
                    <figure>
                      <a href="<?php echo $what_we_do_video_url; ?>" data-rel="lightcase">
                          <img src="<?php echo $what_we_do_image; ?>" alt="about-us" width="435" height="494">
                          <i class="icon-play-fill"></i>
                      </a>
                  </figure>
                  </div>
                  <?php endif; //endif ?>
                </div>
              </div>
            </div>
            <!-- about-details-sec section end -->

            <!-- product-solution-sec section start -->
            <?php $solutions_background_image = get_field('solutions_background_image'); ?>
            <?php if( isset($solutions_background_image) && !empty($solutions_background_image) ) : //to check site Logo ?>
            <div class="product-solution-sec" style="background-image: url(<?php echo $solutions_background_image; ?>);">
            <?php else: ?>
              <div class="product-solution-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/product-solution-bg.jpg);">
            <?php endif; //endif ?> 
              <div class="wrap" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
                <?php $solutions_content = get_field('solutions_content'); ?>
            <?php if( isset($solutions_content) && !empty($solutions_content) ) : //to check site Logo ?>
                <p><?php echo $solutions_content; ?></p>
                <?php endif; //endif ?> 
              </div>
            </div>
            <!-- product-solution-sec section end -->

            <!-- about-details-sec section start -->
            <div class="about-details-sec">
              <div class="wrap">
                <div class="about-details-inner">
                  <div class="img-blk" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
                    <?php $about_details_image = get_field('about_details_image'); ?>
        <?php if( isset($about_details_image) && !empty($about_details_image) ) : //to check site Logo ?>
                    <img src="<?php echo $about_details_image; ?>" alt="product-solution" width="351" height="251">
                    <?php endif; //endif ?>
                  </div>
                  <div class="details" data-sal="slide-up" data-sal-delay="70" data-sal-duration="900">
                    <?php $about_details_title = get_field('about_details_title'); ?>
        <?php if( isset($about_details_title) && !empty($about_details_title) ) : //to check site Logo ?>
                    <h4><?php echo $about_details_title?></h4>
                    <?php endif; //endif ?>


                    <?php $about_details_content = get_field('about_details_content'); ?>
                    <?php if( isset($about_details_content) && !empty($about_details_content) ) : //to check site Logo ?>
                    <?php echo $about_details_content; ?>
                    <?php endif; //endif ?>


                  </div>
                </div>
              </div>
            </div>
            <!-- about-details-sec section end -->

        </div>
        <!--/#main -->