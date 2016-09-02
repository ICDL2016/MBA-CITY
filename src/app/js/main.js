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
//
// $(document).on('click', function(e) {
//   if (!$(e.target).closest('.top-menu').length) {
//
//     console.log($(e.target).closest('.top-menu__link').length)
//   } else {
//     $('.top-menu').removeClass('active')
//   }
// });