$(document).ready(function () {

  $('.fancybox').fancybox();

  $('input').click(function () {
    $('input:not(:checked)').parent().removeClass("price-study__plan--selected");
    $('input:checked').parent().addClass("price-study__plan--selected");
  });

  $('.header-menu__link').on('click', function() {
    $('.top-menu').toggleClass('active');
  })

});