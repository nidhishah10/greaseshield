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

      <!-- Multiple Products start -->
      <div class="multiple-products-sec">
        <div class="wrap">
          <div class="multiple-products-blocks" id="photo-gallery">
             <?php $demo_products = get_field('demo_products');
             $total = count(get_field('demo_products'));
      $count = 0;
      $number = 7;          
             ?>
               <?php foreach ($demo_products as $key => $$demo_products) { ?>
            <div class="multiple-product-block" data-sal="slide-up" data-sal-delay="50" data-sal-duration="700">
              <img src="<?php echo $products['product_image']; ?>" alt="ast-pf" width="186" height="124" />
                <h5><?php echo $demo_products['demo_product_title']; ?></h5>
                <p>
                  <?php echo $demo_products['demo_product_content']; ?>
                </p>
                <a href="<?php echo $demo_products['demo_product_button_url']?>" download class="button"><?php echo $demo_products['demo_product_button_name']; ?></a>
            </div>
            <?php  
            if ($count == $number) {
          // we've shown the number, break out of loop
          break;
        }
            ?>
              <?php $count++; }?>
          </div>
          <div class="show-more">
            <a id="gallery-load-more" href="javascript: my_repeater_show_more();" <?php if ($total < $count) { ?> style="display: none;"<?php } ?>><?php echo the_field('show_more_btn') ?> <i class="icon-arrow"></i></a>
          </div>
        </div>
      </div>
      <!-- Multiple Products end -->

      



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
