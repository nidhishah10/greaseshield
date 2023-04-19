<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	Exit;
}

/**
 * The Template Used For Displaying Home page Content
 *
 * @package WordPress
 * @subpackage Grease Shield
 * @since Grease Shield 1.0
 */
?>
    <!-- Hero Image section start -->
        <div class="hero-image-section gradient-top-right">
            <div class="wrap">
                <div class="hero-img-details">
                    <div class="details">
                        <?php $banner_title = get_field('banner_title');?>
                        <?php if (isset($banner_title) && !empty($banner_title)): //to check site Logo ?>
	                        <h1><?php echo $banner_title ?></h1>
	                        <?php endif; //endif ?>
                        <?php $banner_content = get_field('banner_content');?>
                        <?php if (isset($banner_content) && !empty($banner_content)): //to check site Logo ?>
	                        <p><?php echo $banner_content ?></p>
	                        <?php endif; //endif ?>
                        <div class="btns">
                            <?php
$cta_text = get_field('cta_text');
$cta_url = get_field('cta_url');
?>
                            <?php if (isset($cta_text) && !empty($cta_text) && isset($cta_url) && !empty($cta_url)): //to check site Logo ?>
	                            <a href="<?php echo $cta_url ?>" class="button"><?php echo $cta_text ?></a>
	                            <?php endif; //endif ?>

                             <?php
$video_button_text = get_field('video_button_text');
$video_url = get_field('video_url');
?>
                            <?php if (isset($video_button_text) && !empty($video_button_text) && isset($video_url) && !empty($video_url)): //to check site Logo ?>
	                            <a href="<?php echo $video_url; ?>" class="button btn-outline" data-rel="lightcase"><i class="icon-play-video"></i><?php echo $video_button_text; ?></a>
	                            <?php endif; //endif ?>
                        </div>
                    </div>
                    <?php $banner_image = get_field('banner_image');?>
                    <div class="hero-image">
                        <?php if (isset($banner_image) && !empty($banner_image)): //to check site Logo ?>
	                        <img src="<?php echo $banner_image; ?>" alt="hero-image" width="1172" height="1041">
	                        <?php endif; //endif ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Image section end -->

        <div id="main">
            <!-- Video Block section start -->
            <div class="video-block">
                <?php $video_section_url = get_field('video_section_url');?>
                        <?php if (isset($video_section_url) && !empty($video_section_url)): //to check site Logo ?>
	                <video autoplay muted loop>
	                    <source src="<?php echo $video_section_url; ?>" type="video/mp4">
	                    Your browser does not support the video tag.
	                </video>
	                <?php endif; //endif ?>
                <div class="video-block-details">
                    <div class="sub-main-title" data-sal="slide-up" data-sal-delay="50" data-sal-duration="800">
                        <?php $video_block_subtitle = get_field('video_block_subtitle');?>
                        <?php if (isset($video_block_subtitle) && !empty($video_block_subtitle)): //to check site Logo ?>
	                        <h6><?php echo $video_block_subtitle; ?></h6>
	                        <?php endif; //endif ?>

                        <?php $video_block_title = get_field('video_block_title');?>
                        <?php if (isset($video_block_title) && !empty($video_block_title)): //to check site Logo ?>
	                        <h2><?php echo $video_block_title; ?></h2>
	                        <?php endif; //endif ?>
                    </div>
                    <div class="voordeel-blocks-sec">


                        <?php $voordeels = get_field('voordeels');?>
                        <?php foreach ($voordeels as $key => $voordeel) {?>
                            <div class="voordeel-block">
                            <a href="#" data-sal="slide-up" data-sal-delay="50" data-sal-duration="500">
                                <i class="icon-<?php echo $voordeel['icon'] ?>"></i>
                                <h4><?php echo $voordeel['title'] ?></h4>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <!-- Video Block section end -->

            <!-- img-with-details section start -->
            <div class="img-with-details-sec">
                <div class="wrap">
                    <div class="img-with-details">
                        <div class="img-with-dots">
                            <?php $section_image = get_field('section_image');?>
                            <?php if (isset($section_image) && !empty($section_image)): //to check site Logo ?>
	                            <img src="<?php echo $section_image; ?>" alt="img-details" width="636" height="390">
	                            <?php endif; //endif ?>

                            <?php $image_details = get_field('image_details');?>
                            <?php foreach ($image_details as $key => $image_detail) {?>
                            <div class="dots <?php echo $image_detail['mark_position']; ?>" data-sal="slide-up" data-sal-duration="800">
                                <span class="portion-position"><?php echo $image_detail['mark_number']; ?></span>
                                <div class="inner" data-dot="<?php echo $image_detail['mark_position']; ?>">
                                    <img src="<?php echo $image_detail['mark_image']; ?>" alt="mark" width="300" height="124">
                                    <span class="position-number"><?php echo $image_detail['mark_number']; ?></span>
                                    <div>
                                        <p><?php echo $image_detail['mark_title']; ?></p>
                                        <span><?php echo $image_detail['mark_description']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php }?>


                        </div>
                    </div>
                </div>
            </div>`
            <!-- img-with-details section end -->

            <!-- The Process section start -->
            <div class="the-process-sec gradient-top-right">
                <div class="wrap">
                    <div class="sub-main-title" data-sal="slide-up" data-sal-duration="600">
                        <?php $process_subtitle = get_field('process_subtitle');?>
                        <?php if (isset($process_subtitle) && !empty($process_subtitle)): //to check site Logo ?>
	                        <h6><?php echo $process_subtitle; ?></h6>
	                        <?php endif; //endif ?>


                         <?php $process_title = get_field('process_title');?>
                        <?php if (isset($process_title) && !empty($process_title)): //to check site Logo ?>
	                        <h2><?php echo $process_title; ?></h2>
	                        <?php endif; //endif ?>
                    </div>
                    <div class="process-blocks-sec">

                        <?php $process_steps = get_field('process_steps');?>
                            <?php foreach ($process_steps as $key => $step) {?>
                        <div class="process-block" data-sal="slide-up" data-sal-delay="50" data-sal-duration="800">
                            <a href="#">
                                <figure>
                                    <img src="<?php echo $step['image']; ?>" alt="vaatwasser" width="255" height="255">
                                </figure>
                                <h4><?php echo $step['title']; ?></h4>
                                <p><?php echo $step['description']; ?></p>
                            </a>
                        </div>
                        <?php }?>

                    </div>
                </div>
            </div>
            <!-- The Process section end -->

            <!-- two-imgs section start -->
            <div class="two-imgs-sec" data-sal="slide-up" data-sal-delay="50" data-sal-duration="800">
                <div class="wrap">
                    <div class="two-imgs-inner">
                        <?php $images = get_field('images');?>
                            <?php foreach ($images as $key => $image) {?>
                        <img src="<?php echo $image['image']; ?>" alt="machine" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">

                        <?php }?>
                    </div>
                </div>
            </div>
            <!-- two-imgs section end -->

            <!-- Customer Review section start -->
            <div class="customer-review-sec">
                <div class="wrap">
                    <div class="sub-main-title" data-sal="slide-up" data-sal-duration="600">
                        <?php $reviews_subtitle = get_field('reviews_subtitle');?>
                        <?php if (isset($reviews_subtitle) && !empty($reviews_subtitle)): //to check site Logo ?>
	                        <h6><?php echo $reviews_subtitle; ?></h6>
	                        <?php endif; //endif ?>


                        <?php $reviews_title = get_field('reviews_title');?>
                        <?php if (isset($reviews_title) && !empty($reviews_title)): //to check site Logo ?>
	                        <h2><?php echo $reviews_title; ?></h2>
	                        <?php endif; //endif ?>
                    </div>
                    <div class="review-slider  owl-carousel customer-review-blocks-sec">

                        <?php $reviews = get_field('reviews');?>
                            <?php foreach ($reviews as $key => $review) {
	?>
                        <div class="customer-review-block" data-sal="slide-up" data-sal-delay="70" data-sal-duration="1000">
                            <div class="ratings">
                                <?php for ($i = 1; $i <= 5; $i++) {
		if ($i <= $review['stars']) {?>
                                        <i class="icon-star filled"></i>
                                <?php } else {
			?>
                                        <i class="icon-star"></i>
                                    <?php
}
	}?>
                            </div>
                            <h3><?php echo $review['title']; ?></h3>
                            <p><?php echo $review['comment']; ?></p>
                            <div class="customer-name">
                                <h4><?php echo $review['name']; ?></h4>
                            </div>
                        </div>
                        <?php }?>

                    </div>
                </div>
            </div>
            <!-- Customer Review section end -->

        </div>