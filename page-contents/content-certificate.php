<?php 
//Exit if Directly accessed
if(!defined( 'ABSPATH') ) Exit;
/**
* The Template Used For Displaying Certificate page Content
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
            <!-- certify-details-sec section start -->
            <div class="sub-title-desc-sec">
              <div class="max-1200">
                <div class="sub-title-desc-block" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
                  <?php $page_title = get_field('page_title'); ?>
        <?php if( isset($page_title) && !empty($page_title) ) : //to check site Logo ?>
                    <h5><?php echo $page_title?></h5>
            <?php endif; //endif ?>
                    <?php $page_content = get_field('page_content'); ?>
        <?php if( isset($page_content) && !empty($page_content) ) : //to check site Logo ?>
            <?php echo $page_content?>
            <?php endif; //endif ?>
                </div>
              </div>
            </div>
            <!-- certify-details-sec section end -->

            <!-- certify-partner-sec section start -->
            <div class="certify-partner-sec">
              <div class="max-1200">
                <div class="partner-row">
                  
                  <?php $certificates = get_field('certificates'); ?>
              <?php foreach ($certificates as $key => $certificate) { ?>
                  <div class="partner-img-block">
                    <figure data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
                      <img src="<?php echo $certificate['image']; ?>" alt="PDI" width="<?php echo $certificate['width']; ?>" height="<?php echo $certificate['height']; ?>">
                    </figure>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <!-- certify-partner-sec section end -->

            <!-- certify-details-fig section start -->
            <div class="certify-details-fig" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
              <div class="max-1200">
                <?php $certificate_big_image = get_field('certificate_big_image'); ?>
        <?php if( isset($certificate_big_image) && !empty($certificate_big_image) ) : //to check site Logo ?>
                <figure>
                  <img src="<?php echo $certificate_big_image; ?>" alt="certify-details-fig" width="1132" height="653">
                </figure>
                <?php endif; //endif ?>
              </div>
            </div>
            <!-- certify-details-fig section end -->

            <!-- title-with-bg start -->
            <div class="title-with-bg-sec">
              <div class="max-1200">
                <div class="title-with-bg-block" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
                  <?php $title_1 = get_field('title_1'); ?>
        <?php if( isset($title_1) && !empty($title_1) ) : //to check site Logo ?>
                  <h2><?php echo $title_1?></h2>
                  <?php endif; //endif ?>
                </div>
              </div>
            </div>
            <!-- title-with-bg end -->

            <!-- certify-filtershield-sec start -->
            <div class="certify-filtershield-sec" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
              <div class="max-1200">
                <?php $filter_shield_title = get_field('filter_shield_title'); ?>
        <?php if( isset($filter_shield_title) && !empty($filter_shield_title) ) : //to check site Logo ?>
                    <h5><?php echo $filter_shield_title?></h5>
            <?php endif; //endif ?>
                <?php $filter_shield_content = get_field('filter_shield_content'); ?>
        <?php if( isset($filter_shield_content) && !empty($filter_shield_content) ) : //to check site Logo ?>
            <?php echo $filter_shield_content?>
            <?php endif; //endif ?>
                <figure>
                  <?php $filter_shield_image = get_field('filter_shield_image'); ?>
        <?php if( isset($filter_shield_image) && !empty($filter_shield_image) ) : //to check site Logo ?>
                  <img src="<?php echo $filter_shield_image; ?>" alt="Filtershield" width="1066" height="595">
                  <?php endif; //endif ?>
                </figure>
              </div>
            </div>
            <!-- certify-filtershield-sec start -->

            <!-- title-with-bg start -->
            <div class="title-with-bg-sec">
              <div class="max-1200">
                <div class="title-with-bg-block" data-sal="slide-up" data-sal-duration="800">
                   <?php $filter_shield_bg_title = get_field('filter_shield_bg_title'); ?>
        <?php if( isset($filter_shield_bg_title) && !empty($filter_shield_bg_title) ) : //to check site Logo ?>
                  <h2><?php echo $filter_shield_bg_title; ?></h2>
                  <?php endif; //endif ?>
                </div>
              </div>
            </div>
            <!-- title-with-bg end -->

            <!-- renewable-energy-sec start -->
            <div class="renewable-energy-sec" data-sal="slide-up" data-sal-duration="800">
              <div class="max-1200">
                <?php $renewable_energy_title = get_field('renewable_energy_title'); ?>
        <?php if( isset($renewable_energy_title) && !empty($renewable_energy_title) ) : //to check site Logo ?>
                    <h5><?php echo $renewable_energy_title?></h5>
            <?php endif; //endif ?>
                

                 <?php $renewable_energy_content = get_field('renewable_energy_content'); ?>
        <?php if( isset($renewable_energy_content) && !empty($renewable_energy_content) ) : //to check site Logo ?>
            <?php echo $renewable_energy_content?>
            <?php endif; //endif ?>
                <figure>
                  <?php $renewable_energy_image = get_field('renewable_energy_image'); ?>
        <?php if( isset($renewable_energy_image) && !empty($renewable_energy_image) ) : //to check site Logo ?>
                  <img src="<?php echo $renewable_energy_image; ?>" alt="Renewable-energy" width="907" height="669">
                  <?php endif; //endif ?>
                </figure>
              </div>
            </div>
            <!-- renewable-energy-sec end -->

        </div>
        <!--/#main -->