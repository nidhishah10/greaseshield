<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	Exit;
}

/**
 * The Template Used For Displaying Certificate page Content
 *
 * @package WordPress
 * @subpackage Quest Audio
 * @since Quest Audio 1.0
 */

?>

 <!-- Inner Top Banner section start -->
<?php $banner_title = get_field('banner_title');?>
<?php if (isset($banner_title) && !empty($banner_title)): //to check site Logo ?>
	                <div class="inner-top-banner-sec gradient-top-right">
	                   <div class="wrap">
	                    <div class="top-banner-details about-top">
	                      <h1 data-sal="slide-up" data-sal-delay="50" data-sal-duration="700"><?php echo $banner_title ?></h1>
	                   </div>
	                </div>
	                </div>
	              <?php endif; //endif ?>


<?php $counter = 0;?>
<!-- Inner Top Banner section end -->
      <div id="main">
      <!-- sub-title-desc start -->
      <div class="sub-title-desc-sec">
        <div class="wrap">
        <div class="sub-title-desc-block" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
        <?php $product_page_title = get_field('product_page_title');?>
           <?php if (isset($product_page_title) && !empty($product_page_title)): ?>
              <h5><?php echo $product_page_title ?></h5>
            <?php endif; //endif ?>

          <?php $product_page_content = get_field('product_page_content');?>
         <?php if (isset($product_page_content) && !empty($product_page_content)): ?>
            <?php echo $product_page_content ?>
            <?php endif; //endif ?>
      </div>
        </div>
      </div>
      <!-- sub-title-desc end -->

      <!-- title-with-bg start -->
      <div class="title-with-bg-sec">
        <div class="wrap">
          <div class="title-with-bg-block" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
            <?php $product_bg_title = get_field('product_bg_title');?>
              <?php if (isset($product_bg_title) && !empty($product_bg_title)): //to check site Logo ?>
	                         <h2><?php echo $product_bg_title ?></h2>
	                        <?php endif; //endif ?>
          </div>
        </div>
      </div>
      <!-- title-with-bg end -->

      <!-- product-details-sec start -->
      <?php $product_content = get_field('product_content');
      $demo_product_title = $product_content['product_title'];
$product_count = 0;
$sec_product_count = 0;
?>
        <?php foreach ($product_content as $key => $product_details) {
        //  $demo_product_title = $product_details['product_title'];
	

	$prod_str = str_replace(' ', '', $demo_product_title);
	?>
      <?php if ($counter % 2 === 0): ?>
      <div class="">
              <div class="product-details-sec">
          <div class="product-img" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
            <img src="<?php echo $product_details['product_image']; ?>" alt="sep-pro" width="841" height="337" />
          </div>
          <div class="product-details" data-sal="slide-up" data-sal-delay="70" data-sal-duration="900">
            <div class="title-block">
              <h2><?php echo $product_details['product_title']; ?></h2>
              <h3><?php echo $product_details['product_sub_title']; ?></h3>
              <p>
                <?php echo $product_details['product_content1']; ?>
              </p>
            </div>
          <div class="desc-block">
              <?php echo $product_details['product_sub_content']; ?>
             
   <a href="" class="button <?php  echo $button_popup_class = get_field('button_popup_class'); ?>" data-rel="<?php echo $prod_str . $sec_product_count; ?>"><?php echo $product_details['product_button_name']; ?></a>
      <div class="popouterbox" id="<?php echo $prod_str . $sec_product_count; ?>">
              <div class="popup-block">

                <a href="#" class="close-dialogbox"></a>
                <div class="pop-contentbox">
               <?php if (!empty($product_details['product_icon_data'])) {
    ?>
                  <ul class="product-icons-row">
                  <?php foreach ($product_details['product_icon_data'] as $key => $icon_data) {
      $icon_image = $icon_data['icon'];
      $download_link = $icon_data['pdf_download_url'];
      ?>
                      <li>
                      <a href="<?php echo $download_link; ?>" download>
                        <figure><img src="<?php echo $icon_image; ?>" alt="product-icon"></figure>
                      </a>
                    </li>
                   <?php }?>
                  </ul>
                <?php } else {?>
                    <?php echo "No Data found"; ?>
                  <?php }?>
                </div>
              </div><!--/.popup-block -->
            </div>
        

            </div>
          

          </div>
        </div>
      </div>
        <?php else: ?>
           <div class="bg-light">
            <?php
$sec_detail_product_subtitle = $product_details['product_sub_title'];

	$sec_prod_str = str_replace(' ', '', $sec_detail_product_subtitle);?>
        <div class="">
          <div class="product-details-sec">
            <div class="product-details ml-auto" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
              <div class="title-block">
                <h2><?php echo $product_details['product_title']; ?></h2>
                <h3><?php echo $product_details['product_sub_title']; ?></h3>
                <p>
                  <?php echo $product_details['product_content1']; ?>
                </p>
              </div>
              <div class="desc-block">
              <?php echo $product_details['product_sub_content']; ?>
              <a href=""  class="button <?php  echo $button_popup_class = get_field('button_popup_class'); ?>" data-rel="<?php echo $sec_prod_str . $sec_product_count; ?>"><?php echo $product_details['product_button_name']; ?></a>

 <div class="popouterbox" id="<?php echo $sec_prod_str . $sec_product_count; ?>">
              <div class="popup-block">

                <a href="#" class="close-dialogbox"></a>
                <div class="pop-contentbox">
               <?php if (!empty($product_details['product_icon_data'])) {
    ?>
                  <ul class="product-icons-row">
                  <?php foreach ($product_details['product_icon_data'] as $key => $icon_data) {
      $icon_image = $icon_data['icon'];
      $download_link = $icon_data['pdf_download_url'];
      ?>
                      <li>
                      <a href="<?php echo $download_link; ?>" download>
                        <figure><img src="<?php echo $icon_image; ?>" alt="product-icon"></figure>
                      </a>
                    </li>
                   <?php }?>
                  </ul>
                <?php } else {?>
                    <?php echo "No Data found"; ?>
                  <?php }?>
                </div>
              </div><!--/.popup-block -->
            </div>
          

            </div>
    
            </div>
            <div class="product-img" data-sal="slide-up" data-sal-delay="70" data-sal-duration="900">
              <img src="<?php echo $product_details['product_image']; ?>" alt="sep-pro" width="966" height="632" />
            </div>
          </div>
        </div>
      </div>
    <?php endif;

	$counter++;?>
		  <?php $product_count++;?>
		  <?php $sec_product_count++;?>
    <?php }?>
      <!-- product-details-sec end -->

      <!-- product-solution-sec section start -->
      <div class="product-solution-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/product-solution-bg-new.jpg)">
        <div class="wrap" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
          <?php $product_solution_title = get_field('product_solution_title');?>
          <?php if (isset($product_solution_title) && !empty($product_solution_title)): ?>
            <p><?php echo $product_solution_title ?></p>
            <?php endif; //endif ?>
        </div>
      </div>
      <!-- product-solution-sec section end -->

      <!-- Multiple Products start -->
      <div class="multiple-products-sec">
        <div class="wrap">
          <div class="multiple-products-blocks" id="photo-gallery">
             <?php $products = get_field('products');
$total = count(get_field('products'));
$demo_product_title = $products['product_title'];
$prod_count = 0;
$count = 0;
$number = 7;
?>
               <?php foreach ($products as $key => $products) {
	$string = str_replace(' ', '', $demo_product_title);?>
            <div class="multiple-product-block" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
              <?php $button_popup_class = get_field('button_popup_class');
	$button_popup_data_rel = get_field('button_popup_data_rel');?>
              <img src="<?php echo $products['product_image']; ?>" alt="ast-pf" width="186" height="124" />
                <h5><?php echo $products['product_title']; ?></h5>
                <p>
                  <?php echo $products['product_content']; ?>
                </p>
                <a href="" class="button <?php echo $button_popup_class; ?>" data-rel="<?php echo $string . $prod_count; ?>"><?php echo $products['product_button_name']; ?></a>


                <div class="popouterbox" id="<?php echo $string . $prod_count; ?>">
              <div class="popup-block">

                <a href="#" class="close-dialogbox"></a>
                <div class="pop-contentbox">
               <?php if (!empty($products['icon_data'])) {
		?>
                  <ul class="product-icons-row">
                  <?php foreach ($products['icon_data'] as $key => $icon_data) {
			$icon_image = $icon_data['icon_image'];
			$download_link = $icon_data['icon_url'];
			?>
                      <li>
                      <a href="<?php echo $download_link; ?>" download>
                        <figure><img src="<?php echo $icon_image; ?>" alt="product-icon"></figure>
                      </a>
                    </li>
                   <?php }?>
                  </ul>
                <?php } else {?>
                    <?php echo "No Data found"; ?>
                  <?php }?>
                </div>
              </div><!--/.popup-block -->
            </div>

             <?php $prod_count++;?>
            </div>
            <?php
if ($count == $number) {
		// we've shown the number, break out of loop
		break;
	}
	?>
              <?php $count++;}?>
          </div>
          <div class="show-more">
            <a id="gallery-load-more" href="javascript: my_repeater_show_more();" <?php if ($total < $count) {?> style="display: none;"<?php }?>><?php echo the_field('show_more_btn') ?> <i class="icon-arrow"></i></a>
          </div>
        </div>
      </div>
      <!-- Multiple Products end -->



      <!-- product-details-sec start -->
      <div class="product-details-sec ast-pf-bottom">
        <?php $product_bottom_image = get_field('product_bottom_image');?>
        <div class="product-img" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
          <?php if (isset($product_bottom_image) && !empty($product_bottom_image)): ?>
          <img src="<?php echo $product_bottom_image; ?>" alt="1000-AST-PF" width="655" height="409" />
          <?php endif; //endif ?>
        </div>
        <?php $product_bottom_title = get_field('product_bottom_title');?>
        <div class="product-details" data-sal="slide-up" data-sal-delay="70" data-sal-duration="900">
          <?php if (isset($product_bottom_title) && !empty($product_bottom_title)): ?>
          <h4><?php echo $product_bottom_title; ?></h4>
          <?php endif; //endif ?>

          <?php $product_bottom_content = get_field('product_bottom_content');?>
          <div class="desc-block">
            <?php if (isset($product_bottom_content) && !empty($product_bottom_content)): ?>
              <?php echo $product_bottom_content; ?>
            <?php endif; //endif ?>

            <?php $product_bottom_button = get_field('product_bottom_button');?>
              <?php if (isset($product_bottom_button) && !empty($product_bottom_button)): ?>
            <a href="<?php echo get_field('product_bottom_btn_url'); ?>" class="button"><?php echo $product_bottom_button; ?></a>
              <?php endif; //endif ?>
          </div>
        </div>
      </div>
      <!-- product-details-sec end -->
    </div>
    <!--/#main -->



    <script type="text/javascript">
  var my_repeater_field_post_id = <?php echo 15; ?>;
  var my_repeater_field_offset = <?php echo $number + 1; ?>;
  var my_repeater_field_nonce = '<?php echo wp_create_nonce('my_repeater_field_nonce'); ?>';
  var my_repeater_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
  var my_repeater_more = true;

  function my_repeater_show_more() {

    // make ajax request
    jQuery.post(
      my_repeater_ajax_url, {
        // this is the AJAX action we set up in PHP
        'action': 'my_repeater_show_more',
        'post_id': my_repeater_field_post_id,
        'offset': my_repeater_field_offset,
        'nonce': my_repeater_field_nonce
      },
      function (json) {
        // add content to container
        // this ID must match the containter
        // you want to append content to
        jQuery('#photo-gallery').append(json['content']);
        // update offset
        my_repeater_field_offset = json['offset'];
        // see if there is more, if not then hide the more link
        if (!json['more']) {
          // this ID must match the id of the show more link
          jQuery('#gallery-load-more').css('display', 'none');
        }
      },
      'json'
    );
  }

</script>

