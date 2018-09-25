/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	// front page slider 
	$('.flexslider').flexslider({
       animation: "slide"
    });


/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();
  $('.js-cell').matchHeight();


// splash page hovers 

$('#mhpc').mouseenter(function() {
   $(this).animate({marginTop : '0px'}, 'fast');
});
$('#mhpc').mouseleave(function() {
   $(this).animate({marginTop : '5px'}, 'fast');
});
$('#smat').mouseenter(function() {
   $(this).animate({marginTop : '0px'}, 'fast');
});
$('#smat').mouseleave(function() {
   $(this).animate({marginTop : '5px'}, 'fast');
});





        $('#location-map area').each(function() {
            var id = $(this).attr('id');
            $(this).mouseover(function() {
                $('#overlay'+id).show();

            });

            $(this).mouseout(function() {
                var id = $(this).attr('id');
                $('#overlay'+id).hide();
            });

        });
		
	/*	
		$('a#burke').mouseenter(function() {
    			$(this).css({'display' : "none"});
		});
		
		
		$('li').click(function() {
	
		$(this).addClass('needred');
	});
	*/
	
	
	
	
	// colorbox	
	$(".inline").colorbox({inline:true, width:"80%"});
	
	
	
	$('#map').mapster({
    fillOpacity: 0.5,
    render_highlight: {
        fillColor: 'ffffff',
        stroke: false,
        //altImage: 'examples/images/usa_map_720_alt_4.jpg'
    }});
	
	
$('#countyburke').mouseover(function(e) {
$('#burke').mouseover();
}).mouseout(function(e) {
$('#burke').mouseout();
 }).click(function(e) { e.preventDefault(); });

	


	
// this is dfor the isotope jquery for the blog roll
  // we load it int eh alpha container and spit it out in the beta container
  var $alpha = $('#alpha');
  var $container = $('#beta');
  var $checkboxes = $('#filters input');
  
  // init isotope, then insert all items from hidden #alpha
 
 
  $container.isotope({
  	itemSelector: '.blog-square',
	  masonry: {
  			//columnWidth: 310
		},
		filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
  })
  
  .isotope( 'insert', $alpha.find('.blog-square') );
  
  $('.filter a').click(function(){
        $('.filter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    });
			
/*	$container.append(divs).isotope('appended', divs, function () {
    $container.isotope('reLayout');
	});	*/

	



});// END #####################################    END