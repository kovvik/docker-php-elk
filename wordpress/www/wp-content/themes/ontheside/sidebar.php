<div id="sidebar-container">
<section id="sidebar">
    <figure class="logo-left"><a href="<?php echo home_url(); ?>/">
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Menu" /> </a>
        </figure>
            <nav class="sidemenu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
                <br><hr><br>
                <?php if ( ! dynamic_sidebar('left-sidebar') ) : ?>
                    <div id="meta"><h4><?php _e('Subcribers', 'ontheside'); ?></h4>  
	                <ul><?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                        </ul>
	            </div>
                        <div id="subscribe">
<p><img style="vertical-align:-2px;" alt="RSS" src="<?php echo get_template_directory_uri(); ?>/images/feed-icon-16x16.gif" /> &nbsp;<a href="<?php bloginfo_rss('rss2_url') ?>"><?php _e( 'Entries RSS', 'ontheside' ); ?></a>   <a href="<?php bloginfo_rss('comments_rss2_url') ?>"><?php _e( 'Comments RSS', 'ontheside' ); ?></a></p>
	                </div><!-- ends subcribe -->
                    <?php else : ?>
                        <?php dynamic_sidebar(); ?> 
                <?php endif; ?>
</section><!-- end sidebar --><div class="clearfix"></div>
</div>