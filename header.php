<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/colorbox.css" />

<link href='https://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sintony' rel='stylesheet' type='text/css'>


<?php wp_head(); 

$site = $_REQUEST['site'];
$postType = $_REQUEST['post_type'];
if( $site != '' ) :
  if( $site == 'matrac' ) {
    $WhichSiteAreWeOn = 'MATRAC';
  } elseif($site == 'smat') {
    $WhichSiteAreWeOn = 'SMAT';
  }
endif;
?>
</head>

<body>

<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=219473481428768";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->


		<?php if('yes' == get_field('turn_alert_message_on', 'option') )  : ?>
        	<div id="alert">
            	<div id="alert-inside">
                    <div id="alert-title">
                        <?php the_field('alert_title','option'); ?>
                    </div><!-- alert title -->
                   <div id="alert-message">
                    <?php the_field('alert_message','option'); ?>
                   </div><!--  alert message -->
           	</div><!-- alert -->
           </div><!-- alert -->
        <?php endif; ?>
   
   
   <?php 
   //      If is the SMAT Site
   if(
   is_tree(82) || 
   ('smatprograms' == get_post_type())  ||
   ('smatresources' == get_post_type()) ||
   ('smatslides' == get_post_type())
     ) {   
     	$WhichSiteAreWeOn = 'SMAT';
		$headerDescription = 'smat_header_description';
		//$whatsiteheader = 'smatslides';
     } 
	 //      If is the MHPC Site
	 elseif(
	 is_tree(84) || 
   ('programs' == get_post_type())  ||
   ('resources' == get_post_type()) ||
   ('slides' == get_post_type())
   //is_search()
	 	
	 ) {
		 $WhichSiteAreWeOn = 'MATRAC';
		 $headerDescription = 'header_description';
		//$whatsiteheader = 'slides';
	 } else {
    $WhichSiteAreWeOn = 'MATRAC';
     $headerDescription = 'header_description';
   }

// if(is_archive() && $postType = '')

   ?>
   
   
   
   
   
  <div id="top-header">
    	<div id="top-header-inside">
        
        
        

        	
			       <?php if(!is_front_page()) : ?>
                <div id="top-buttons">
                    <ul>
                       <?php if ('MATRAC' == $WhichSiteAreWeOn) { // If is The MHPC Tree ?>
                            <li class="smat"><a href="<?php bloginfo('url'); ?>/smat">Go to SMAT & MRC</a></li>
                            <!-- <li class="member"><a href="<?php bloginfo('url'); ?>/mhpc/members">Member-login</a></li> -->
                       <?php } elseif('SMAT' == $WhichSiteAreWeOn) { // If is the SMAT Tree?>
                            <li class="mhpc"><a href="<?php bloginfo('url'); ?>/matrac">Go to MATRAC</a></li>
                            <!-- <li class="member"><a href="<?php bloginfo('url'); ?>/mhpc/members">Member-login</a></li> -->
                       <?php } ?>
                          </ul>
               </div><!-- top buttons -->
                    
             <?php else: ?>
              <!-- <div class="topbtn">
                <a target="_blank" href="http://www.mission-health.org/emergency.php">Learn more about Mission Health Trauma & Emergency Services</a>
              </div> -->
            <?php endif; ?>
            
           
        </div><!-- top header inside -->
    </div><!-- top header -->
    



<div id="main" class="wrapper">
    
     <?php if(!is_front_page()) : ?><div class="header"><?php endif; ?>
    
        
        <?php if(!is_front_page()) : ?>
        
        <?php if('MATRAC' == $WhichSiteAreWeOn) {  // is is mhpc ?>
        	<h1 class="logo"><a href="<?php bloginfo('url'); ?>/matrac">Metrolina Preparedness</a></h1>
        <?php } elseif('SMAT' == $WhichSiteAreWeOn) {  // if is smat ?>
        	<h1 class="logo-smat"><a href="<?php bloginfo('url'); ?>/smat">Metrolina Preparedness</a></h1>
        <?php } ?>
       
        
        <div class="header-right">
        
        <div class="top-description">
			<?php if(get_field($headerDescription, 'option')!="") { the_field($headerDescription , 'option'); } ?>
        </div><!-- top description -->
    
    
		<?php if('MATRAC' == $WhichSiteAreWeOn) {  // is is mhpc 
        		$facebooklink = get_field('facebook_link', 'option');
				$twitterlink = get_field('twitter_link', 'option');
         } elseif('SMAT' == $WhichSiteAreWeOn) {  // if is smat
        		$facebooklink = get_field('smat_facebook', 'option');
				$twitterlink = get_field('smat_twitter', 'option');
         } ?>
        <div id="sociallinks">
        	<ul>
            	<li class="facebook"><a href="<?php echo $facebooklink;  ?>" target="_blank">Like us on Facebook</a></li>
               <!--  <li class="twitter"><a href="<?php echo $twitterlink;  ?>" target="_blank">Follow us on Twitter</a></li>
                <li class="youtube"><a href="<?php the_field('youtube_link', 'option'); ?>" target="_blank">Watch us on Youtube</a></li> -->
            </ul>
        </div><!-- social links -->
        
        <!--<div class="header-twitter">
        	<a href="<?php //the_field('twitter_link', 'option'); ?>" target="_blank">Follow us on Twitter</a>
        </div> header facebook -->
        
        <!--<div class="header-facebook">
        	<a href="<?php //the_field('facebook_link', 'option'); ?>" target="_blank">Like us on Facebook</a>
        </div> header facebook -->
        
        
       <!-- <div class="facebook-like">
        	<div class="fb-like" data-href="<?php //the_permalink(); ?>" data-width="64" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
            </div> facebook like -->
            
        </div><!-- header right -->
        
        <nav id="site-navigation" class="main-navigation" role="navigation">

        	<?php 

            echo '<!-- '.$WhichSiteAreWeOn.'-->';


          if('MATRAC' == $WhichSiteAreWeOn) {  // is is mhpc ?>
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'MATRAC', 'menu_class' => 'nav-menu' ) ); ?>
           <?php } elseif('SMAT' == $WhichSiteAreWeOn) {  // if is smat ?>
           <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
        		<?php wp_nav_menu( array( 'theme_location' => 'smat', 'menu_class' => 'nav-menu' ) ); ?>
        <?php } ?>
		</nav><!-- #site-navigation -->
        
        <?php endif; // end if is not front page ?>

	<?php if(!is_front_page()) : ?></div><!-- header --><?php endif; ?>
    
    
<?php if(is_page('matrac') || is_page('smat')) : ?>
	<?php get_template_part('includes/homeslides'); ?>
<?php endif; // end if is front page?>
    


	