(function($) {

  $('.main-navigation .search-submit').on('click',function (evt) {
    evt.preventDefault(); 
    $('.main-navigation .search-field').focus();
    
    // write script to open search form

    
  });

  $('.main-navigation .search-field').on('blur', function () {
// Write script to close search form
  });




  // figure out enter key press event to submit form
  // $('.name of form').submit();


  $('.search-field').keydown(function(enter) {
    $('.search-field').submit();
  })



})( jQuery );