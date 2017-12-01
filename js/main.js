$( function() {
  $( "#accordion" ).accordion({
      heightStyle: "content",
      collapsible: true,
      active: false,
      activate: function( event, ui ) {
          if(!$.isEmptyObject(ui.newHeader.offset())) {
              $('html:not(:animated), body:not(:animated)').animate({ scrollTop: ui.newHeader.offset().top-100 }, 'fast');
          }
      }
  });
} );
