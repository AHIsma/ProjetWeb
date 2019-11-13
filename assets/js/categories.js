$( '.nav_categories .navbar-nav .nav-item a' ).on( 'click', function () {
	$( '.nav_categories .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});
