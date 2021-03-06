// ======================================================================= Namespace
var wpcake = wpcake || {},
	$ = jQuery;


// =======================================================================  Menu
wpcake.menu = {

	init: function() {

		// Make sub menus accessible via keyboard navigation
		wpcake.menu.focusableSubMenus();

	},

	focusableSubMenus: function() {

		$( '.menu a' ).on( 'focus', function() {
			if ( $( this ).parent( 'li' ).hasClass( 'menu-item-has-children' ) ) {
				$( this ).next( 'ul' ).addClass( 'focusable' );
			} else {
				$( this ).closest( 'ul' ).find( 'ul' ).removeClass( 'focusable' );
			}
		} );

	},

} // wpcake.menu


// =======================================================================  Resize videos
wpcake.intrinsicRatioEmbeds = {

	init: function() {

		// Resize videos after their container
		var vidSelector = 'iframe, object, video';
		var resizeVideo = function( sSel ) {
			$( sSel ).each( function() {
				var $video = $( this ),
					$container = $video.parent(),
					iTargetWidth = $container.width();

				if ( ! $video.attr( 'data-origwidth' ) ) {
					$video.attr( 'data-origwidth', $video.attr( 'width' ) );
					$video.attr( 'data-origheight', $video.attr( 'height' ) );
				}

				var ratio = iTargetWidth / $video.attr( 'data-origwidth' );

				$video.css( 'width', iTargetWidth + 'px' );
				$video.css( 'height', ( $video.attr( 'data-origheight' ) * ratio ) + 'px' );
			});
		};

		resizeVideo( vidSelector );

		$( window ).resize( function() {
			resizeVideo( vidSelector );
		} );

	},

} // wpcake.intrinsicRatioEmbeds


// ======================================================================= Function calls
$( document ).ready( function( ) {

	wpcake.menu.init();						// Menus

	wpcake.intrinsicRatioEmbeds.init();		// Embed resizing

} );
