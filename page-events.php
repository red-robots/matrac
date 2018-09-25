<?php
/**
 * Template Name: Events
 */

get_header(); ?>



			
				
                
              <div class="page-content">
            	
				<div class="entry-content"><h1><?php the_title(); ?></h1></div>
				<div class="page-left">
               
              
 <?php
				
					// Get Which Site
					if(is_tree(82)) { // If is The SMAT Tree
						$whatsite = 'post';
						$site = 'smat';
					} elseif(is_tree(84)) { // If is the MHPC Tree
						$whatsite = 'post';
						$site = 'mhpc';
					}
					

					
					$temp = $wp_query;
					$wp_query = null;
					$wp_query = new WP_Query();
					$wp_query->query(array(
						'post_type'=> $whatsite,
						'paged' => $paged,
						'posts_per_page' => '-1',
						'meta_key' => 'event_start_date',
						'meta_value' => date("Y/m/d h:i A"),
						'meta_compare' => '>',
						'orderby' => 'meta_value',
						'order' => 'ASC',
					));
					if ($wp_query->have_posts()) : ?>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); 

                // Set some variables to set how to show the dates.
				$startdate = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
				$enddate = DateTime::createFromFormat('Ymd', get_field('event_end_date'));
				// add link to more info
				$getTitle = get_the_title(); 
				$linkdown = sanitize_title_with_dashes($getTitle);

                ?>
                
            <div class="eventposttop"> 
  <!-- <a href="#<?php echo $linkdown; ?>"> -->
  <a href="<?php the_permalink(); ?>?site=smat">
  	<?php
		
		if(in_category('mhpc-meetings')) { // If is The SMAT Tree) 
			$iconType = 'post-icon-meetings';
			$iconSet = 'post-icon-meetings';
			$colorType = 'color-black';
			$site ="mhpc";
		} elseif(in_category('meetings')) { // If is The MHPC Tree) 
			$iconType = 'post-icon-meetings';
			$iconSet = 'post-icon-meetings';
			$colorType = 'color-black';
			$site ="smat";
		} elseif(in_category('mhpc-events')) { // If is The SMAT Tree)
			$iconType = 'post-icon-events';
			$iconSet = 'post-icon-events';
			$colorType = 'color-black';
			$site ="mhpc";
		} elseif(in_category('events')) { // If is The MHPC Tree) 
			$iconType = 'post-icon-events';
			$iconSet = 'post-icon-events';
			$colorType = 'color-black';
			$site ="smat";
		} elseif(in_category('mhpc-notes')) { // If is The SMAT Tree)
			$iconType = 'post-icon-notes';
			$iconSet = 'post-icon-notes';
			$colorType = 'color-black';
			$site ="mhpc";
		} elseif(in_category('notes')) { // If is The MHPC Tree) 
			$iconType = 'post-icon-notes';
			$iconSet = 'post-icon-notes';
			$colorType = 'color-black';
			$site ="smat";
		}

?>
       
      
       
               
     <div class="entry-content">

         <div class="post-date">
             <?php echo $startdate->format('M d'); ?>
					<?php if(get_field('event_end_date')!="") { 
							echo " " . "-" . " " . $enddate->format('M d'); 
					} ?>
          </div><!--post date -->
          
          <div class="<?php echo $iconType; ?> <?php echo $site; ?>-<?php echo $iconType; ?>">
      		</div><!--  home post icon -->
             
         <h2 class="newstitle"><?php the_title(); ?></h2>
            
            <!-- <div class="linkdown">&raquo;</div> -->
      
                
      </div><!-- entry-content -->
      </a>
 </div><!-- square post container -->

 <div class="clear"></div>
             <?php endwhile;?>
              <?php pagi_posts_nav(); ?>
          <?php endif; // end of the loop. ?>

            
            </div><!-- page-left -->
            
            <?php  wp_reset_query(); wp_reset_postdata(); ?>
            
            
            <div class="page-right">
                <div class="entry-content">
                <?php
				
					// Get Which Site
					if(is_tree(82)) { // If is The SMAT Tree
						$whatsite = 'post';
						$site = 'smat';
					} elseif(is_tree(84)) { // If is the MHPC Tree
						$whatsite = 'post';
						$site = 'mhpc';
					}
					//echo $site;

					
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
                    <h2>Event Archives</h2>
                    
					
                    
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
					$archives = wp_get_archives( $args ); 
					// echo '<pre>';
					// print_r($archives);
					// echo '</pre>';
					?>
                        
               
                
                </div><!-- entry-content -->
            </div><!-- page- right -->
            
            
            
            </div><!-- page-content -->
                
                
                
				<?php // comments_template( '', true ); ?>
			



<?php get_footer(); ?>