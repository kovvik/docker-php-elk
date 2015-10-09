<?php 
/* archive
 */
get_header(); ?>
    <section id="main">
        <article id="content">
        <?php if (have_posts()) : ?>		
	    <?php while (have_posts()) : the_post(); ?>			
	    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <div class="postmetadata">		
	            <div class="responses">
<?php comments_popup_link(); ?> <img alt="comments" src="<?php echo get_template_directory_uri(); ?>/images/comment.gif" height="16" width="16" /> 
                    </div>			
                        <p class="authorlink">  
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"> <?php the_date(); ?></a><span><?php echo get_the_author(); ?></span>
                        </p>	 
		</div> 	
		    <div class="entry"><header>			
		    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2></header>	
		        <?php the_content(); ?>
		    </div>				
		    <?php comments_template(); ?>	
	    </div>	
	    <?php endwhile; ?>
	    <?php else : ?>	
	    <div class="post">
	        <div class="entry">
		  <h2><?php _e( 'No Articles Found', 'ontheside' ); ?></h2>
		  <p><?php _e( 'Oops, what you were looking for is not here.', 'ontheside' ); ?></p>
	        </div>
            </div>	
        </article>    
	<?php endif; ?>
     </section> <!-- ends main -->
        <?php get_sidebar(); ?>    	  
            <?php get_footer(); ?>