<?php
/**
 * Template Name: News
 */

get_header(); 


?>



			
				
                
              <div class="page-content">
            	
				
				<div class="page-left">
               
              
 <?php
				
					
					// Get Which Site
					if(is_tree(82)) { // If is The SMAT Tree
						$whatsite = 'smatprograms';
						$site = 'smat';
					} elseif(is_tree(84)) { // If is the MHPC Tree
						$whatsite = 'programs';
						$site = 'mhpc';
					}

					
					$temp = $wp_query;
					$wp_query = null;
					$wp_query = new WP_Query();
					$wp_query->query(array(
						'post_type'=> $whatsite,
						'paged' => $paged,
						'posts_per_page' => 10,
					));
					if ($wp_query->have_posts()) : ?>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                
            <div class="entry-content">
            
            <h2>
            	<a href="<?php the_permalink(); ?>">
            		<?php the_title(); ?>
            	</a>
            </h2>
            
            		<?php the_excerpt(); ?>

            		<div class="read-more">
            			<a href="<?php the_permalink(); ?>">
		            		Read More &raquo;
		            	</a>
            		</div><!-- read more -->

                </div><!-- entry-content -->
              <?php endwhile;?>
              <?php pagi_posts_nav(); ?>
          <?php endif; // end of the loop. ?>

            
            </div><!-- page-left -->
            
            <?php wp_reset_postdata(); wp_reset_query(); ?>
            
            
            <div class="page-right">
                <div class="entry-content">
                <?php
				
					// Get Which Site
					if(is_tree(82)) { // If is The SMAT Tree
						$whatsite = 'smatprograms';
					} elseif(is_tree(84)) { // If is the MHPC Tree
						$whatsite = 'programs';
					}

					?>
                   <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					    <label>
					        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
					        <input type="search" class="search-field"
					            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
					            value="<?php echo get_search_query() ?>" name="s"
					            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
					         <input name="site" type="hidden" value=<?php echo $site; ?> />
					    </label>
					    <input type="submit" class="search-submit"
					        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
					</form>

                    <h2>News Archives</h2>
                    
					
                    
                    <?php $args = array(
						'type'            => 'monthly',
						'limit'           => '',
						'format'          => 'html', 
						'before'          => '',
						'after'           => '',
						'show_post_count' => false,
						'echo'            => 1,
						'order'           => 'DESC',
					    'post_type'     => $whatsite
					);
					wp_get_archives( $args ); ?>
                </div><!-- entry-content -->
            </div><!-- page- right -->
            
            
            
            </div><!-- page-content -->
                
                
                
				<?php // comments_template( '', true ); ?>
			



<?php get_footer(); ?>