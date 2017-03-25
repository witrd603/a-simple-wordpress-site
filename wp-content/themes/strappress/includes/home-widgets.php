<?php
/**
 * File used for homepage widgets
 *
 * @package WordPress
 */
?>

    <div id="widgets" class="home-widgets">
        <div class="row">
        <div class="col-md-4">
        
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('home-widget-1')) : ?>
            
                <div class="widget-title-home"><h3><?php _e('Home Widget 1', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your first home widget box. To edit please go to Appearance > Widgets and choose 6th widget from the top in area six called Home Widget 1. Title is also managable from widgets as well.','responsive'); ?></div>
            
      <?php endif; //end of home-widget-1 ?>

        <?php responsive_widgets_end(); // responsive after widgets hook ?>
        </div><!-- end of .col-lg-4 -->

        <div class="col-md-4">
        <?php responsive_widgets(); // responsive above widgets hook ?>
            
      <?php if (!dynamic_sidebar('home-widget-2')) : ?>
            
                <div class="widget-title-home"><h3><?php _e('Home Widget 2', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your second home widget box. To edit please go to Appearance > Widgets and choose 7th widget from the top in area seven called Home Widget 2. Title is also managable from widgets as well.','responsive'); ?></div>
            
      <?php endif; //end of home-widget-2 ?>
            
            <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-lg-4 -->

        <div class="col-md-4">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('home-widget-3')) : ?>
            
                <div class="widget-title-home"><h3><?php _e('Home Widget 3', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your third home widget box. To edit please go to Appearance > Widgets and choose 8th widget from the top in area eight called Home Widget 3. Title is also managable from widgets as well.','responsive'); ?></div>
        
        <?php endif; //end of home-widget-3 ?>
            
        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-lg-4 -->
        </div>
    </div><!-- end of #widgets -->
