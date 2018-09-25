<?php
/**
 * Template Name: Tools & Info
 */

get_header(); 

// Get Which Site
if(is_tree(82)) { // If is The SMAT Tree
    $parent = '176';
} elseif(is_tree(84)) { // If is the MHPC Tree
    $parent = '11';
}

?>

<div class="page-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

        <div class="page-left-tools"> 
        <?php // This is a subpage
        //$parentPage = $post->post_parent;
        // List pages arguments
        // $arg = array(
        //     'child_of' => $parent,
        //     'title_li' => '',
        //     'order' => 'ASC',
        //     'sort_column' => 'post_title'
        // );
             echo '<h3>' . get_the_title($parent) . '</h3>';
        //     wp_list_pages($arg); ?>

        <?php wp_nav_menu( array( 'theme_location' => 'tools' ) ); ?>

        </div><!-- page left -->


        <div class="page-right-tools">
            <div class="entry-content">
                <h1><?php the_title(); ?></h1>
                <?php //the_field('resources','option'); ?>
                <?php the_content(); ?>
            </div><!-- entry-content -->
        </div><!-- page right -->


    <?php endwhile; // end of the loop. ?>
    <?php endif; // end of the loop. ?>
</div><!-- page-content -->
<?php get_footer(); ?>