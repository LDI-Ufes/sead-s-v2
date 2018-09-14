
//
// Menu acessível via teclado
//

$(document).ready(function () {

  $.fn.accessibleDropDown = function () {
    var el = $(this);

    $("a", el).focus(function () {
      $(this).parents("li").addClass("menuSuspensoAtivo");
    }).blur(function () {
      $(this).parents("li").removeClass("menuSuspensoAtivo");
    });
  }

  $(".menu").accessibleDropDown();

});


//
// Menu móvel
//

$('.btoMenu_abrir').click(function() {
  $('#menu').addClass('menu_aberto')
  $('body').addClass('esmaecer')
})

$('.btoMenu_fechar').click(function() {
  $('#menu').removeClass('menu_aberto')
  $('body').removeClass('esmaecer')
})