<?php 
/* single
 */
get_header(); ?>
    <section id="main">  
        <div id="content">
        <?php if (have_posts()) : ?>		
	  <?php while (have_posts()) : the_post(); ?>
<?php if (has_post_format('gallery')) : ?><div class="post format-gallery" id="post-<?php the_ID(); ?>">
<?php else: ?>	
		
	    <div class="post" id="post-<?php the_ID(); ?>"> <?php endif; ?>	
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
		            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            </header>
                                <?php the_post_thumbnail(); ?>
		                <?php the_content(); ?>
                                    <p class="edit-link"><?php edit_post_link( __( 'Edit', 'ontheside' ) ); ?></p>
                                    <p class="tag-link"><?php the_tags(); ?></p>
                                    <div class="cat-link"><?php the_category(); ?></div>
                                        
                        </article>
                            <hr>
                                <?php comments_template(); ?>	
	    </div><!-- ends post class -->	
	  <?php endwhile; ?>
	                            <nav id="navigation">
                                    <p>&laquo;&laquo; <?php previous_post_link(); ?>  |  
                                    <?php next_post_link(); ?> &raquo;&raquo;</p>
                                    </nav>
	    <?php else : ?>	
	    <div class="post">
	        <div class="entry">
		  <h2><?php _e( 'No Matching Criteria Found', 'ontheside' ); ?></h2>
		  <p><?php _e( 'Oops, did not find that article.', 'ontheside' ); ?></p>
	        </div>
            </div>
        </div><!-- ends content --> 	   
	<?php endif; ?>

    </section> <!-- ends main -->
        <?php get_sidebar(); ?>
            <?php get_footer(); ?>
