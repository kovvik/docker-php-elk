<?php 
/* 404
 */
get_header(); ?>
    <section id="main">
        <div id="content">

	<article class="post">
	<div class="entry">
		<h2><?php _e( 'Page Not Found', 'ontheside' ); ?></h2>
		<p><?php _e( 'Oh My, Your page could not be found.', 'ontheside' ); ?></p>
	</div>
	</article>	
	
        </div>
    </section> <!-- ends main -->
        <?php get_sidebar(); ?>    	  
            <?php get_footer(); ?>