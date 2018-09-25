<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>



            
            
            <div class="page-content">
   <!-- 
  ############################    News & Events
  -->         	
				<div class="home-extra1 js-blocks">
                	<h2 class="hometitle1"><a href="<?php bloginfo('url'); ?>/events">Events</a></h2>
                   <?php 
				   
				   // Get Which Site
						if(is_tree(82)) { // If is The SMAT Tree
							$whatsite = 'post';
						} elseif(is_tree(84)) { // If is the MHPC Tree
							$whatsite = 'post';
						}
										   
				   
				   
						$args = array(
							'post_type' => $whatsite,
							'posts_per_page' => '4',
							'meta_key' => 'event_start_date',
							'meta_value' => date("Y/m/d h:i A"),
							'meta_compare' => '>',
							'orderby' => 'meta_value',
							'order' => 'ASC'
						);
						$the_query = new WP_Query( $args );  ?>
					<?php if ( $the_query->have_posts() ) : ?>
                    
                    <div class="home-post-container">
                    
                    
                   <?php if('yes' == get_field('turn_alert_message_on', 'option') )  : ?> 
                    <div class="home-post">
                             
                                 <div class="icon-alerts mhpc-post-icon-alerts">
                                 </div><!--  home post icon -->
                                 
                                 <div class="home-post-right">
                                     <div class="home-post-date">
                                    	<span class="<?php echo $colorType; ?>" >
												Important Alert
                                        </span>
                                     </div><!-- home post date -->
                                    <div class="home-post-title">
                                           <span class="color-red"><?php the_field('bottom_alert_message', 'option'); ?></span>
                                    </div><!-- home post title -->
                                </div><!-- home post right -->
                          	
                          </div><!-- home post -->
                          
                   <?php endif; // end if message is turned on. ?>
                          
                          
                          
                    
					<?php while ( $the_query->have_posts() ) : ?>
                  <?php $the_query->the_post(); ?>
                  
                  	
                    		<?php
								if(in_category('meetings')) { // If is The SMAT Tree) 
									$iconType = 'smat-post-icon-meetings';
									$iconSet = 'icon-meetings';
									$colorType = 'color-black';
								}
								elseif(in_category('mhpc-meetings')) { // If is The MHPC Tree) 
									$iconType = 'mhpc-post-icon-meetings';
									$iconSet = 'icon-meetings';
									$colorType = 'color-black';
								}
								elseif(in_category('events')) { // If is The SMAT Tree)
									$iconType = 'smat-post-icon-events';
									$iconSet = 'icon-events';
									$colorType = 'color-black';
								}
								elseif(in_category('mhpc-events')) { // If is The MHPC Tree) 
									$iconType = 'mhpc-post-icon-events';
									$iconSet = 'icon-events';
									$colorType = 'color-black';
								}
								elseif(in_category('notes')) { // If is The SMAT Tree)
									$iconType = 'smat-post-icon-notes';
									$iconSet = 'icon-notes';
									$colorType = 'color-black';
								}
								elseif(in_category('mhpc-notes')) { // If is The MHPC Tree) 
									$iconType = 'mhpc-post-icon-notes';
									$iconSet = 'icon-notes';
									$colorType = 'color-black';
								}
								
								
								// Set some variables to set how to show the dates.
								$startdate = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
								$enddate = DateTime::createFromFormat('Ymd', get_field('event_end_date'));

							?>
                           <div class="home-post">
                            <a href="<?php the_permalink(); ?>">
                                 <div class="<?php echo $iconSet; ?> <?php echo $iconType; ?>">
                                 </div><!--  home post icon -->
                                 
                                 <div class="home-post-right">
                                     <div class="home-post-date">
                                    	<span class="<?php echo $colorType; ?>" >
												<?php echo $startdate->format('M d'); ?>
												<?php if(get_field('event_end_date')!="") { 
													echo " " . "-" . " " . $enddate->format('M d'); 
												} ?>
                                        </span>
                                     </div><!-- home post date -->
                                    <div class="home-post-title">
                                           <span class="<?php echo $colorType; ?>"><?php the_title(); ?></span>
                                    </div><!-- home post title -->
                                </div><!-- home post right -->
                          	</a>
                          </div><!-- home post -->
                      
                      
                  
                  <?php endwhile; ?>
                  <?php endif; ?>
                  <?php wp_reset_postdata(); ?>
                  </div><!-- home post container -->
                  	<div class="home-more-link color-green">
                    		<a href="<?php bloginfo('url'); ?>/events">VIEW ALL EVENTS</a>
                      </div><!-- home more link -->
               </div><!-- home extras -->
               
              
        
  <!-- 
  ############################    Program Highlights
  -->           
               
               
<div class="home-extra2 js-blocks">


<?php 

// Get Which Site
if(is_tree(82)) { // If is The SMAT Tree
$whatprogram = 'smatprograms';
$sitelink = 'smat';
} elseif(is_tree(84)) { // If is the MHPC Tree
$whatprogram = 'programs';
$sitelink = 'mhpc';
}



 ?>

  <h2 class="hometitle2">
    <a href="<?php bloginfo('url'); ?>/<?php echo $sitelink; ?>/who-we-serve">Our Service Area</a>
  </h2>

    <div class="home-program-container">
      <a href="<?php bloginfo('url'); ?>/<?php echo $sitelink; ?>/who-we-serve">
        <img src="<?php bloginfo('template_url'); ?>/images/map-small.png" />
    </a>
    </div><!-- home program container -->





<div class="home-more-link color-purple">
<a href="<?php bloginfo('url'); ?>/<?php echo $sitelink; ?>/who-we-serve">LEARN MORE ABOUT WHO WE SERVE</a>
</div><!-- home more link -->
</div><!-- home extras -->



  <!-- 
  ############################    Program Highlights
  -->           
               
               
<div class="home-extra3 js-blocks">


<?php 

// Get Which Site
if(is_tree(82)) { // If is The SMAT Tree
$whatprogram = 'smatprograms';
$sitelink = 'smat';
} elseif(is_tree(84)) { // If is the MHPC Tree
$whatprogram = 'programs';
$sitelink = 'mhpc';
}



$args = array(
  'post_type' => $whatprogram,
  'posts_per_page' => '3'
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>

  <h2 class="hometitle3">
    <a href="<?php bloginfo('url'); ?>/<?php echo $sitelink; ?>/news">News</a>
  </h2>

  <?php while ( $the_query->have_posts() ) : ?>
  <?php  $the_query->the_post(); ?>
    <div class="home-program-container">
      <a href="<?php the_permalink(); ?>">
        <div class="home-post-date-news color-purple">
          <div class="color-blue" >
            <?php echo get_the_date('M d'); ?>
          </div>
        </div><!-- home post date -->

        <div class="home-news-right">
          <div class="home-program-title carrious">
            <?php the_title(); ?>
          </div><!-- home program excerpt -->

          <div class="home-program-excerpt-news sintony">
            <?php echo excerpt(20); ?>
          </div><!-- home program excerpt -->
      </div><!-- home news right -->

      <div class="clear"></div>
    </a>
    </div><!-- home program container -->

  <?php endwhile; ?>
<?php endif; ?>



<div class="home-more-link color-blue">
<a href="<?php bloginfo('url'); ?>/<?php echo $sitelink; ?>/news">CONTINUE READING</a>
</div><!-- home more link -->
</div><!-- home extras -->
				
                
       	
            
            </div><!-- page-content -->
            
            

        
        

		


<?php get_footer(); ?>