$(document).ready(function () {

  $('.fancybox').fancybox();

  $('input').click(function () {
    $('input:not(:checked)').parent().removeClass("price-study__plan--selected");
    $('input:checked').parent().addClass("price-study__plan--selected");
  });

  $('.header-menu__link').on('click', function() {
    $('.top-menu').toggleClass('active');
  })

  $(function () {
    $('ul.accordion__menu li:has("ul")').append('<span></span>');
    $('ul.accordion__menu li a').click(function() {
      var checkElement = $(this).next();
      checkElement.stop().animate({'height':'toggle'}, 500);
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        return false;
      }
    });
  });

  $( "ul.accordion__menu>li>a" ).click(function() {
    $( this ).toggleClass( "open" );
  });

  $( "ul.accordion__menu>li>ul>li>a" ).click(function() {
    $( this ).toggleClass( "open" );
  });

});