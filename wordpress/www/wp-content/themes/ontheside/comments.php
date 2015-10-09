<?php
/*
 * comments.php
 * @ontheside
 */
    if ( post_password_required() )
        return;
?>
    <section id="comments">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title"><?php get_the_title() ?></h2>
            <ul class="commentlist">
            <?php wp_list_comments(); ?>
            </ul><!-- ends commentlist -->
<div class="navigation">
<div class="alignleft"><?php previous_comments_link() ?></div>
<div class="alignright"><?php next_comments_link() ?></div>
</div>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
		<small class="open">&#9746;</small>
	<?php else : // then this if comments are closed ?>
	        <small>! </small>
	<?php endif;
    endif; // end have_comments() ?>
    <?php comment_form(); ?>
    </section><!-- ends comments -->