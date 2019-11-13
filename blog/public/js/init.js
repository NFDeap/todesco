/* Button Collapse NAV */
$(document).ready(function(){
    $(".sidenav").sidenav();
    $(".button-collapse").sidenav();
    $('.slider').slider({full_width: true});
    $('.dropdown-trigger').dropdown();
    /* $('#select').formSelect(); */
  });

function sliderPrev(){
  $('.slider').slider('pause');
  $('.slider').slider('prev');
}

function sliderNext(){
  $('.slider').slider('pause');
  $('.slider').slider('next');
}


$(document).ready(function() {
  $("#slide-out").sidenav();
  $(".selectedTest").formSelect();
  $('select').formSelect();
  $('.materialboxed').materialbox();
});


/* 
jQuery(document).ready(function($) {
  $(document).ready(function() {
    $('#tabelaCarros').DataTable({     
      "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]]
    });
  });
});
 */