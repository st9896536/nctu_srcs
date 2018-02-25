( function($) {

	/* Hide/Show Button_reg */
	wp.customize( 'hide_button_reg', function( value ) {
		value.bind( function( to ) {
			if( to ){
				$( '#button_register' ).hide();
			}
			else{
				$( '#button_register' ).show();
			}
		});
	});

})(jQuery);
