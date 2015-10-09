<?php 
/* category
 */
get_header(); ?>
    <section id="main">
        <article id="content">
        <?php if (have_posts()) : ?>		
	    <?php while (have_posts()) : the_post(); ?>			
	    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <div class="postmetadata">
<h2 id="sectiontitle"><?php single_cat_title('Category: '); ?></h2>		
	            
		</div> 	
		    <div class="entry">	<header>		
		    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2></header>	
		        <?php the_content(); ?>
		    </div>				
		    <?php comments_template(); ?>	
	    </div>	
	    <?php endwhile; ?>
	    <?php else : ?>	
	    <div class="post">
	        <div class="entry">
		  <h2>No Articles Found</h2>
		  <p>Oops, nothing found from your look up.</p>
	        </div>
            </div>	
        </article>    
	<?php endif; ?>
     </section> <!-- ends main -->
        <?php get_sidebar(); ?>    	  
            <?php get_footer(); ?>