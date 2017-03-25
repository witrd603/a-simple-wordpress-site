<?php
/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        StrapPress 
 * @author         Brad Williams 
 * @copyright      2011 - 2014 Brag Interactive
 * @license        license.txt
 * @version        Release: 3.3.4
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
</div><!-- end of wrapper-->
<?php responsive_wrapper_end(); // after wrapper hook ?>


</div><!-- end of container -->
<?php responsive_container_end(); // after container hook ?>

<footer id="footer" class="clearfix">
  <div class="container">

    <hr>

    <div id="footer-wrapper">

      <div class="row">

          <div class="col-lg-6">
            <?php if (has_nav_menu('footer-menu', 'responsive')) { ?>
            <nav role="navigation">
            <?php wp_nav_menu(array(
              'container'       => '',
              'menu_class'      => 'footer-menu',
              'theme_location'  => 'footer-menu')
            ); 
            ?>
          </nav>
            <?php } ?>
          </div><!-- end of col-lg-6 -->

          <div class="col-lg-6">
      <?php if( bi_option('disable_social_footer') == '1') { ?>     
            <div class="social-icons">
                <?php $social_options = bi_option( 'social_icons' ); ?>
                    <?php foreach ( $social_options as $key => $value ) {
                        if ( $value ) { ?>
                            <a href="<?php echo $value; ?>" title="<?php echo $key; ?>" target="_blank">
                                <i class="fa fa-<?php echo $key; ?>"></i>
                            </a>
                        <?php }
                    } ?>
                </div><!-- .social-icons -->
            <?php } ?>
        </div><!-- end of col-lg-6 -->
      </div><!-- end of row -->

      <div class="row">

        <div class="col-lg-4 copyright">


            <?php if( bi_option('custom_copyright') ) : ?>
        <?php echo bi_option('custom_copyright'); ?>
      <?php else : ?>
              &copy; <?php _e('Copyright', 'responsive'); ?> <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a>
            <?php endif; ?>
        </div> <!-- end copyright -->

       
        <div class="col-lg-4 scroll-top hidden-print"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '<i class="fa fa-chevron-up"></i>', 'responsive' ); ?></a></div>
        

        <div class="col-lg-4 powered">

            <?php if( bi_option('custom_power') ) : ?>
        <?php echo bi_option('custom_power'); ?>
      <?php else : ?>
               <a href="<?php echo esc_url(__('http://strappress.com','responsive')); ?>" title="<?php esc_attr_e('StrapPress', 'responsive'); ?>">
          <?php printf('StrapPress'); ?></a>
          developed by <a href="<?php echo esc_url(__('http://bragthemes.com','responsive')); ?>" title="<?php esc_attr_e('Brag Themes', 'responsive'); ?>">
          <?php printf('Brag Themes'); ?></a>
            <?php endif; ?>
          
        </div><!-- end .powered -->
    </div><!-- end row -->
    </div><!-- end #footer-wrapper -->
  </div> <!-- end container --> 
</footer><!-- end #footer -->

<?php wp_footer(); ?>

</body>
</html>