( function () {
    "use strict";

    var menuToggle = $( '#menu-toggle' );
    var menuLabel = $( '#menu-toggle-label' );

    function classReplace ( e ) {
        if ( menuToggle.prop( 'checked' ) ) {
            //if menu is opened
            menuLabel.removeClass( 'fa-bars' ).addClass( 'fa-close' );
        } else {
            //if menu is closed
            menuLabel.removeClass( 'fa-close' ).addClass( 'fa-bars' );
        }
    }

    function linkClickEvent ( oLinks ) {
        oLinks.each( function () {
            this.addEventListener( 'click', classReplace, false );
        } );
    }

    linkClickEvent( menuToggle );

} ) ( jQuery );
