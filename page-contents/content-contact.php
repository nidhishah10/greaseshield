<?php 
//Exit if Directly accessed
if(!defined( 'ABSPATH') ) Exit;
/**
* The Template Used For Displaying Contact page Content
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
      <!-- sub-title-desc start -->
      <div class="sub-title-desc-sec">
        <div class="max-1200">
          <div class="sub-title-desc-block" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
            <?php $contact_page_title = get_field('contact_page_title'); ?>
        <?php if( isset($contact_page_title) && !empty($contact_page_title) ) : //to check site Logo ?>
            <h5><?php echo $contact_page_title?></h5>
            <?php endif; //endif ?>
             <?php $contact_page_content = get_field('contact_page_content'); ?>
        <?php if( isset($contact_page_content) && !empty($contact_page_content) ) : //to check site Logo ?>
            <p><?php echo $contact_page_content?></p>
            <?php endif; //endif ?>
          </div>
        </div>
      </div>
      <!-- sub-title-desc end -->

      <!-- contact-blocks start -->
      <div class="contact-blocks-sec">
          <div class="max-1200">
            <div class="contact-blocks">

              <?php $contact_details = get_field('contact_details'); ?>
              <?php foreach ($contact_details as $key => $contact_detail) { ?>
                <div class="contact-block" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800">
                <a href="<?php echo $contact_detail['url']; ?>" target="_blank">
                  <i class="icon-<?php echo $contact_detail['icon']; ?>"></i>
                  <p><?php echo $contact_detail['text']; ?></p>
                </a>
              </div>
              <?php } ?>
              
              

            </div>
          </div>
      </div>
      <!-- contact-blocks end -->

      <!-- sub-title-desc start -->
      <div id="contact-form-sec" class="sub-title-desc-sec follow-media">
        <div class="max-1200">
          <div class="sub-title-desc-block">
            <?php $social_media_heading = get_field('social_media_heading'); ?>
        <?php if( isset($social_media_heading) && !empty($social_media_heading) ) : //to check site Logo ?>
        <h5 data-sal="slide-up" data-sal-delay="50" data-sal-duration="700"><?php echo $social_media_heading?></h5>
            <?php endif; //endif ?>


            
            <ul data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
              <?php $social_medias = get_field('social_medias'); ?>
              <?php foreach ($social_medias as $key => $social_media) { ?>
              <li><a href="<?php echo $social_media['url']; ?>" target="_blank"><i class="icon-<?php echo $social_media['name']; ?>"></i></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- sub-title-desc end -->

      <!-- contact-form-sec start -->
      <div class="contact-form-sec bg-light">
        <div class="max-1200">
          <div class="contact-form-img-blocks">
            <div class="contact-form-block" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
              <?php $contact_form_shortcode = get_field('contact_form_shortcode'); ?>
        <?php if( isset($contact_form_shortcode) && !empty($contact_form_shortcode) ) : //to check site Logo ?>
        <?php echo do_shortcode($contact_form_shortcode); ?>
        <?php endif; //endif ?>
            </div>
            <div class="contact-img-block" data-sal="slide-up" data-sal-delay="80" data-sal-duration="1000">
               <?php $contact_form_image = get_field('contact_form_image'); ?>
        <?php if( isset($contact_form_image) && !empty($contact_form_image) ) : //to check site Logo ?>
              <img src="<?php echo $contact_form_image ?>" alt="contact-img" width="350" height="354">
              <?php endif; //endif ?>
            </div>
          </div>
          </div>
      </div>
      <!-- contact-form-sec end -->
      
    </div>
    <!--/#main -->