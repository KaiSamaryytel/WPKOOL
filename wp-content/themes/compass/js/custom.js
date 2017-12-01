//Menu Init
jQuery(function(){
    jQuery('ul.sf-menu').superfish();
});
//Sit Slider setting
jQuery(document).ready(function($) {
jQuery.Slitslider.defaults = {
		// transitions speed
		speed : 1000,
		// if true the item's slices will also animate the opacity value
		optOpacity : false,
		// amount (%) to translate both slices - adjust as necessary
		translateFactor : 230,
		// maximum possible angle
		maxAngle : 25,
		// maximum possible scale
		maxScale : 5,
		// slideshow on / off
		autoplay : true,
		// keyboard navigation
		keyboard : true,
		// time between transitions
		interval : 30000,
		// callbacks
		onBeforeChange : function( slide, idx ) { return false; },
		onAfterChange : function( slide, idx ) { return false; }
	};
});
//Home page Animation
jQuery(document).ready(function(jQuery) {
var animated_element = jQuery('.animated');
function image_animation() {
  animated_element.each(function(){
  var get_offset = jQuery(this).offset();
    if ( jQuery(window).scrollTop() + jQuery(window).height() > get_offset.top+jQuery(this).height()/2) {
      jQuery(this).addClass('animation_started');
     // var el = $(this).find('.animated');
      setTimeout(function(){
        jQuery(this).removeClass('animated').removeAttr('style');
      }, 300);
    }
  });

}
  jQuery(window).scroll(function() {
    image_animation();
  });  
  jQuery(window).load(function() {
    setInterval(image_animation,300);
  });

});
//Full Screen Slider Init
jQuery(function() {			
				var Page = (function() {
					var $navArrows = jQuery( '#nav-arrows' ),
						$nav = jQuery( '#nav-dots > span' ),
						slitslider = jQuery( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {
								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );
							}
						} ),
						init = function() {
							initEvents();							
						},
						initEvents = function() {
							// add navigation events
							$navArrows.children( ':last' ).on( 'click', function() {
								slitslider.next();
								return false;
							} );
							$navArrows.children( ':first' ).on( 'click', function() {
								slitslider.previous();
								return false;
							} );
							$nav.each( function( i ) {
							jQuery( this ).on( 'click', function( event ) {
							var $dot = jQuery( this );
						if( !slitslider.isActive() ) {
						$nav.removeClass( 'nav-dot-current' );
							$dot.addClass( 'nav-dot-current' );
						}	
						slitslider.jump( i + 1 );
									return false;
								} );
							} );
						};
						return { init : init };
				})();
				Page.init();			
			});