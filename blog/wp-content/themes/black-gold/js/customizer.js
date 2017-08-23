( function( $ ) {
  if( wp !== null && typeof wp.customize === 'function' ) {

      // Change Header Box Title
      wp.customize( 'header_title', function( value ) {
        value.bind( function( to ) {
          $( '.blackgold-heading-box h1' ).html( to );
        } );
      } );

      // Change Visibility of Header Box
      wp.customize( 'header_box_visible', function( value ) {
        value.bind( function( to ) {
          if( to ) {
            $( '.blackgold-heading-box' ).removeClass('hidden');
            $( '.blackgold-heading-box' ).addClass('visible');
          }
          else {
            $( '.blackgold-heading-box' ).removeClass('visible');
            $( '.blackgold-heading-box' ).addClass('hidden');
          }
        } );
      } );

      // Change Site Title
      wp.customize( 'blogname', function( value ) {
        value.bind( function( to ) {
          $( '.blackgold-logo.navbar-brand' ).text( to );
        } );
      } );

      // Change Site Title Color
      wp.customize( 'site_title_color', function( value ) {
        value.bind( function( to ) {
          $( '.blackgold-logo.navbar-brand' ).css( 'color', to );
        } );
      } );

      // Change Header Text Color
      wp.customize( 'header_textcolor', function( value ) {
        value.bind( function( to ) {
          $( '.blackgold-heading-box h1' ).css( 'color', to );
        } );
      } );
      
      // Change Header Box Color
      wp.customize( 'header_box_color', function( value ) {
        value.bind( function( to ) {
          $( '.blackgold-heading-box' ).css( 'background-color', to );
        } );
      } );

      // Change Header Text Shadow Color
      wp.customize( 'header_title_shadow_color', function( value ) {
        value.bind( function( to ) {
          $( '.blackgold-heading-box h1' ).css( 'text-shadow', '3px 3px 1px ' + to );
        } );
      } );
  }
} )( jQuery );