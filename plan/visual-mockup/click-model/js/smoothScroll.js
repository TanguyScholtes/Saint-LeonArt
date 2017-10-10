( function () {
    "use strict";

    var topLinks = $( '#back-to-top__link' );

    function scrollToLink ( e ) {
        e.preventDefault();
        var targetId = $( e.target ).attr( "href" );
        $( 'html, body' ).animate( {
            scrollTop: $( targetId ).offset().top
        }, 800, function() {
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = targetId;
        } );
    }

    function linkClickEvent ( oLinks ) {
        oLinks.each( function () {
            this.addEventListener( 'click', scrollToLink, false );
        } );
    }

    linkClickEvent( topLinks );

    // Back to top permalink appears on scroll
    $( "#back-to-top" ).hide();
    $( window ).scroll( function() {
        if ( $( window ).scrollTop() >= 100 ) {
            $( "#back-to-top" ).fadeIn( "fast" );
        } else {
            $( "#back-to-top" ).fadeOut( "fast" );
        }
    } );

} ) ( jQuery );
