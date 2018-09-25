<div id="table">

<?php 
###############################

		// Hospitals

###############################
?>


<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => '-1',
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'organization', // Name when registering CT
					'field' => 'slug',
					'terms' => 'hospitals' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	
    <div class="column">
    <div class="column-header js-blocks">Hospitals</div><!-- column header -->
		<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
                    
            <div class="cell js-cell">
				<div class="cell-title"><?php the_title(); ?></div>
                <div class="cell-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  Email
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
			</div><!-- cell -->    
                    
        <?php endwhile; ?> 
	</div><!-- column -->           
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 




<?php 
###############################

		// EMS Agencies

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => '-1',
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'organization', // Name when registering CT
					'field' => 'slug',
					'terms' => 'ems-agencies' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	
    <div class="column">
    <div class="column-header">EMS Agencies</div><!-- column header -->
		<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
                    
            <div class="cell js-cell">
				<div class="cell-title"><?php the_title(); ?></div>
                <div class="cell-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  Email
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
			</div><!-- cell -->    
                    
        <?php endwhile; ?> 
	</div><!-- column -->           
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 






<?php 
###############################

		// Emergency Management

###############################
?>


<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => '-1',
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'organization', // Name when registering CT
					'field' => 'slug',
					'terms' => 'emergency-management' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	
    <div class="column">
    <div class="column-header">Emergency Management</div><!-- column header -->
		<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
                    
            <div class="cell js-cell">
				<div class="cell-title"><?php the_title(); ?></div>
                <div class="cell-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  Email
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
			</div><!-- cell -->    
                    
        <?php endwhile; ?> 
	</div><!-- column -->           
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 




<?php 
###############################

		// Public Health

###############################
?>


<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => '-1',
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'organization', // Name when registering CT
					'field' => 'slug',
					'terms' => 'public-health' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	
    <div class="column">
    <div class="column-header">Public Health</div><!-- column header -->
		<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
                    
            <div class="cell js-cell">
				<div class="cell-title"><?php the_title(); ?></div>
                <div class="cell-address"><?php the_field('address'); ?></div>
                <?php if(have_rows('liaison_contact_name')): while(have_rows('liaison_contact_name')): the_row(); 


                $contact = get_sub_field('contact');
                $email = get_sub_field('email_address');
                $phone_number = get_sub_field('phone_number');

                ?>
	                
	                <?php if( $contact != '' ) { ?><div class="cell-phone"><?php echo $contact; ?></div><?php } ?>
	                <?php if( $email != '' ) { ?>
		                <div class="emails">
			                <a href="mailto:<?php echo antispambot($email); ?>">
							  Email
							</a>
						</div>
					<?php } ?>
	                <?php if( $phone_number != '' ) { ?><div class="cell-liason"><?php echo $phone_number; ?></div><?php } ?>
	            <?php endwhile; endif; ?>
			</div><!-- cell -->    
                    
        <?php endwhile; ?> 
	</div><!-- column -->           
<?php endif; ?>  


         

</div><!-- table -->