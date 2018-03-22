//require('./bootstrap');

$(document).ready(function(){
    // // Disable form button while invalid  input field contains invalid input
    // $( "#delete" ).prop( "disabled", true );// Disable delete button
    // $('#restaurant_name').on('input', function() {
    //     myvalue = $(this).val().toLowerCase();
    //     name = $('.restaurant-name').text().toLowerCase();
    //     if(myvalue == name)
    //     {
    //         $("#delete").prop("disabled", false );
    //     }
    //     else
    //     {
    //         $("#delete").prop("disabled", true );
    //     }
    // });

    //Scroll to Top pages
    $(window).scroll(function(){
      if($(this).scrollTop() >= 50)
      {
        $('#return-to-top').fadeIn(200);
      }
      else
      {
        $('#return-to-top').fadeOut(200);
      }
    });
    $('#return-to-top').click(function(){
      $('body,html').animate({
        scrollTop : 0
      },500);
    });

    //CKEditor Package - WYSIWYG Editor
    $('textarea').ckeditor();
  });