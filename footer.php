    <!--/#main -->
        <footer id="footer" class="gradient-top-bottom">
            <div class="wrap">
                <div class="footer-details">
                    <div class="logo-details" data-sal="slide-up" data-sal-delay="50" data-sal-duration="800">
                         <?php $logo = get_field('footer_logo', 'option'); ?>
                            <?php if( isset($logo) && !empty($logo) ) : //to check site Logo ?>
                            <a href="<?php bloginfo('url'); ?>" id="logo" title="<?php bloginfo('name'); ?>">
                                <img src="<?php echo $logo; ?>" alt="logo" width="250" height="45">
                            </a>
                            <?php else:  //else default name display ?>
                                <h4><a href="<?php bloginfo('url'); ?>" id="logo" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h4>
                            <?php endif; //endif ?>
                        
                        <?php $footer_text = get_field('footer_text', 'option'); ?>
                            <?php if( isset($footer_text) && !empty($footer_text) ) : //to check site Logo ?>
                            <p><?php echo $footer_text; ?></p>
                            <?php endif; //endif ?>
                    </div>
                    <div class="ftr-links" data-sal="slide-up" data-sal-delay="70" data-sal-duration="1000">
                        <?php $contact_heading = get_field('contact_heading', 'option'); ?>
                            <?php if( isset($contact_heading) && !empty($contact_heading) ) : //to check site Logo ?>
                            <h4 class="ftr-title"><?php echo $contact_heading; ?></h4>
                            <?php endif; //endif ?>
                        
                        <ul>
                            <?php $contact_details = get_field('contact_details', 'option'); ?>
                            <?php foreach ($contact_details as $key => $contact_detail) { ?>
                                <li><span><?php echo $contact_detail['name']; ?></span><a href="#"><?php echo $contact_detail['value']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="working-hrs" data-sal="slide-up" data-sal-delay="90" data-sal-duration="1200">
                        <?php $working_hours_heading = get_field('working_hours_heading', 'option'); ?>
                            <?php if( isset($working_hours_heading) && !empty($working_hours_heading) ) : //to check site Logo ?>
                            <h4 class="ftr-title"><?php echo $working_hours_heading; ?></h4>
                            <?php endif; //endif ?>

                        <?php $working_hours_details = get_field('working_hours_details', 'option'); ?>
                            <?php foreach ($working_hours_details as $key => $working_hours_detail) { ?>
                                <div class="day-time">
                            <span class="day"><?php echo $working_hours_detail['day']?></span>
                            <span class="time"><?php echo $working_hours_detail['hours']?></span>
                        </div>
                            <?php } ?>
                    </div>
                </div>
            </div>
            <!--/.wrap -->
        </footer>
        <!--/#footer -->
</div><!--/#wrapper-->
<?php wp_footer(); ?>
</body>
</html>
