$( '.nav_categories .navbar-nav a' ).on( 'click', function () {
	$( '.nav_categories .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});