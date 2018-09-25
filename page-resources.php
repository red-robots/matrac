<?php
/**
 * Template Name: Resources
 */

get_header(); ?>

<div class="page-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
        <div class="page-left">         
            <div class="entry-content">
                <h1><?php the_title(); ?></h1>
                <?php the_field('resources','option'); ?>
            </div><!-- entry-content -->
        </div><!-- page left -->
        
        
        <div class="page-right">
            
        </div><!-- page right -->
        
        
    <?php endwhile; // end of the loop. ?>
    <?php endif; // end of the loop. ?>
</div><!-- page-content -->
<?php get_footer(); ?>