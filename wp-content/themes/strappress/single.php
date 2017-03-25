<?php
/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        StrapPress 
 * @author         Brad Williams 
 * @copyright      2011 - 2014 Brag Interactive
 * @license        license.txt
 * @version        Release: 3.3.4
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

<div class="row">
        <div class="col-lg-9">

        <div id="content">
        
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

        
         
      <?php if( bi_option('enable_disable_breadcrumbs','1') == '1') {?>
        <?php echo responsive_breadcrumb_lists(); ?>
        <?php } ?>
    
          
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
                </header>

                <?php if( bi_option('enable_disable_meta_single','1') == '1') {?>
                <section class="post-meta">
                <?php 
                    printf( __( '<i class="fa fa-clock-o"></i> %2$s <i class="fa fa-user"></i> %3$s', 'responsive' ),'meta-prep meta-prep-author',
		            sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
			            get_permalink(),
			            esc_attr( get_the_time() ),
			            get_the_date()
		            ),
		            sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			            get_author_posts_url( get_the_author_meta( 'ID' ) ),
			        sprintf( esc_attr__( 'View all posts by %s', 'responsive' ), get_the_author() ),
			            get_the_author()
		                )
			        );
		        ?>
				    <?php if ( comments_open() ) : ?>
                        <span class="comments-link">
                        <span class="mdash">&mdash;</span>
                    <?php comments_popup_link(__('No Comments', 'responsive'), __('1 Comment', 'responsive'), __('% Comments', 'responsive')); ?>
                        </span>
                    <?php endif; ?> 
                </section><!-- end of .post-meta -->
                 <?php } ?>
                                
                <section class="post-entry">
                    <?php the_content(); ?>
                    
                    <?php if ( get_the_author_meta('description') != '' ) : ?>
                    
                    <div id="author-meta">
                    <?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '80' ); }?>
                        <div class="about-author"><?php _e('About','responsive'); ?> <?php the_author_posts_link(); ?></div>
                        <p><?php the_author_meta('description') ?></p>
                    </div><!-- end of #author-meta -->
                    
                    <?php endif; // no description, no author's meta ?>
                    
                    
                    <?php custom_link_pages(array(
                            'before' => '<nav class="pagination"><ul>' . __(''),
                            'after' => '</ul></nav>',
                            'next_or_number' => 'next_and_number', # activate parameter overloading
                            'nextpagelink' => __('&rarr;'),
                            'previouspagelink' => __('&larr;'),
                            'pagelink' => '%',
                            'echo' => 1 )
                            ); ?>
                            

                </section><!-- end of .post-entry -->
                
                <footer class="article-footer">
                <?php if( bi_option('enable_disable_tags','1') == '1') {?>
                
                <div class="post-data">
				    <?php the_tags(__('Tagged with:', 'responsive') . ' ', ' ', '<br />'); ?>  
                </div><!-- end of .post-data --> 
                 <?php } ?>            

            <div class="post-edit"><?php edit_post_link(__('Edit', 'responsive')); ?></div>  
            </footer>           
            </article><!-- end of #post-<?php the_ID(); ?> -->
            
			<?php comments_template( '', true ); ?>
            
        <?php endwhile; ?> 

        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
        <nav class="navigation">
			<div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'responsive' ) ); ?></div>
            <div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'responsive' ) ); ?></div>
		</nav><!-- end of .navigation -->
        <?php endif; ?>

	    <?php else : ?>

       <article id="post-not-found" class="hentry clearfix">
        <header>
           <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>
       </header>
       <section>
           <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>
       </section>
       <footer>
           <h6><?php _e( 'You can return', 'responsive' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'responsive' ); ?>"><?php _e( '&#9166; Home', 'responsive' ); ?></a> <?php _e( 'or search for the page you were looking for', 'responsive' ); ?></h6>
           <?php get_search_form(); ?>
       </footer>

   </article>

<?php endif; ?>  
      
        </div><!-- end of #content -->
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>