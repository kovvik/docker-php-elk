<?php 
/* 
 * page
 */
get_header(); ?>
    <section id="main">
        <div id="content">
        <?php if (have_posts()) : ?>		
	    <?php while (have_posts()) : the_post(); ?>			
	    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	        <div class="postmetadata">		
	            <div class="responses">
<?php comments_popup_link(); ?> <img alt="comments" src="<?php echo get_template_directory_uri(); ?>/images/comment.gif" height="16" width="16" /> 
                    </div>			
                        <p class="authorlinks"> 
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"> <?php the_date(); ?></a><span><?php echo get_the_author(); ?></span>
                        </p>	 
		</div> 	
		    <article class="entry">
                    <header>		
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    </header>
		        <?php the_content(); ?>
<p class="edit-link"><?php edit_post_link(__( 'Edit', 'ontheside' )); ?></p>
                                    <p class="tag-link"><?php the_tags(); ?></p>
                                    <div class="cat-link"><?php the_category(); ?></div>
		    </article>				
		    <?php comments_template(); ?>	
            </div>	
	    <?php endwhile; ?>
	        <nav id="navigation">
		    <div class="fleft"><?php next_posts_link( ' &laquo; ' ) ?></div>
		    <div class="fright"> <?php previous_posts_link( ' &raquo; ' ) ?></div>
	        </nav>
	    <?php else : ?>	
	    <div class="post">
	        <div class="entry">
		  <h2><?php _e( 'No Articles Found', 'ontheside' ); ?></h2>
		  <p><?php _e( 'Oops, what you were looking for is not here.', 'ontheside' ); ?></p>
	        </div>
            </div>	
        </div><!-- ends content -->    
	<?php endif; ?>
    </section> <!-- ends main -->
        <?php get_sidebar(); ?>    	  
            <?php get_footer(); ?>