(function($){

    $("#otp-form").submit(function( event ) {

        var $form = $( this ),
            btn = $form.find( "button" ),
            loading_text = btn.data( "loading-text" );
            btn.text( loading_text );
            btn.prop( "disabled", true );

        $.post( "verify.php", $form.serialize() )
         .done(function ( raw_data ) {
             var data = JSON.parse(raw_data);

             if( data.success ) {
                 $form.hide();
                 $( ".alert" ).prop( "class", "alert" );
                 $( ".alert" ).addClass( "alert-success" );
             }
             else {
                 btn.text( 'Check' );
                 btn.prop( "disabled", false );
                 $( ".alert" ).addClass( "alert-danger" );
             }

             $( ".alert" ).text( data.message );

         }, "json");

        event.preventDefault();
    });

})(jQuery);
