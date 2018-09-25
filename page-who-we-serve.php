<?php
/**
 * Template Name: Who We Serve
 */

get_header(); ?>



			
				
                
              <div class="page-content">
              <?php while ( have_posts() ) : the_post(); ?>
            <div class="entry-content">
            
            <h1><?php the_title(); ?></h1>
            
            
				<?php the_content(); ?>
                
            
            <div id="states-container">

             <div class="map-image">
                <img src="<?php bloginfo('template_url'); ?>/images/map2.png" usemap="#Map" id="map"/>
                <?php get_template_part('includes/map-cords'); ?>
             </div><!-- map image -->
            
             <div class="map-words-container">
             <div class="map-words">
             	<ul>
                	<li><a class='inline' href="#avery" alt="avery">Avery</a></li>
                    <li><a class='inline' href="#buncombe" alt="buncombe" >Buncombe</a></li>
                    <li><a class='inline' href="#cherokee" alt="cherokee">Cherokee</a></li>
                    <li><a class='inline' href="#clay" alt="clay" >Clay</a></li>
                    <li><a class='inline' href="#graham" alt="graham" >Graham</a></li>
                    <li><a class='inline' href="#haywood" alt="haywood" >Haywood</a></li>
                    <li><a class='inline' href="#henderson" alt="haywood" >Henderson</a></li>
                    <li><a class='inline' href="#jackson" alt="jackson" >Jackson</a></li>
                    <li><a class='inline' href="#macon" alt="macon" >Macon</a></li>
                    
               </ul>
             </div><!-- map words -->
             
             <div class="map-words">
             	<ul>
                	<li><a class='inline' href="#madison" alt="madison">Madison</a></li>
                    <li><a class='inline' href="#mcdowell" alt="mcdowell" >McDowell</a></li>
                    <li><a class='inline' href="#mitchell" alt="mitchell" >Mitchell</a></li>
                    <li><a class='inline' href="#polk" alt="polk" >Polk</a></li>
                    <li><a class='inline' href="#rutherford" alt="rutherford" >Rutherford</a></li>
                    <li><a class='inline' href="#swain" alt="swain" >Swain</a></li>
                    <li><a class='inline' href="#transylvania" alt="swain" >Transylvania</a></li>
                    <li><a class='inline' href="#yancey" alt="yancey" >Yancey</a></li>
                   
                
               </ul>
             </div> <!-- map words -->
             
             <div class="clear"></div>
             <!--  <ul>
              <li>
                 <a class='inline' href="#other-state-regional-partners" alt="other-state-regional-partners" >
                      Other State Regional Partners
                 </a>
             </li></ul> -->
             
             </div> <!-- map words container -->
             
            
             </div><!-- states container -->   
                
            </div><!-- entry-content -->
            
<?php endwhile; // end of the loop. ?>

<?php wp_reset_postdata(); ?>

<div class="clear"></div>


<?php get_template_part('includes/popups'); ?>

<?php get_template_part('includes/table'); ?>







</div><!-- page-content -->
                
			



<?php get_footer(); ?>