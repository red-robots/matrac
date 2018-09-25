<?php wp_reset_postdata(); ?>
<?php 
###############################

		// Avery County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'avery' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
    <div id='avery' class="popups">
    <h3>Avery County</h3> 
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
      		<div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
                   
        <?php endwhile; ?> 
        </div><!-- #burke -->
    </div><!-- display none --> 
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 

<?php 
###############################

		// Mitchell County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'mitchell' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='mitchell' class="popups">
         <h3>Mitchell County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #cleveland -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Yancey County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'yancey' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='yancey' class="popups">
         <h3>Yancey County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #catawba -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Madison County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'madison' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='madison' class="popups">
         <h3>Madison County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #lincoln -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Haywood County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'haywood' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='haywood' class="popups">
         <h3>Haywood County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #gaston -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Swain County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'swain' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='swain' class="popups">
         <h3>Swain County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #iredell -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Graham County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'graham' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='graham' class="popups">
         <h3>Graham County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #mecklenburg -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Cherokee County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'cherokee' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='cherokee' class="popups">
         <h3>Cherokee County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #cabarus -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Clay County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'clay' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='clay' class="popups">
         <h3>Clay County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #union -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 





<?php 
###############################

		// Macon County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'macon' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='macon' class="popups">
         <h3>Macon County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #stanly -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Jackson County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'jackson' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='jackson' class="popups">
         <h3>Jackson County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #anson -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Transylvania County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'transylvania' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='transylvania' class="popups">
         <h3>Transylvania County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #richmond -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Henderson County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'henderson' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='henderson' class="popups">
         <h3>Henderson County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #stanly -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Buncombe County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'buncombe' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='buncombe' class="popups">
         <h3>Buncombe</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #stanly -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 

<?php 
###############################

		// McDowell County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'mcdowell' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='mcdowell' class="popups">
         <h3>McDowell</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #stanly -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 

<?php 
###############################

		// Rutherford County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'rutherford' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='rutherford' class="popups">
         <h3>Rutherford</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #stanly -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 

<?php 
###############################

		// Polk County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'polk' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='polk' class="popups">
         <h3>Polk</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup js-blocks">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  <?php echo antispambot($email); ?>
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #stanly -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 

