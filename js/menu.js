//
// Menu acessível via teclado
//

$(document).ready(function () {

  $.fn.accessibleDropDown = function () {
    var el = $(this);

    $('a', el).focus(function () {
      $(this).parents('li').addClass('menuSuspensoAtivo');
      $(this).parents('.menuLista').addClass('menuAberto');
    }).blur(function () {
      $(this).parents('li').removeClass('menuSuspensoAtivo');
      $(this).parents('.menuLista').removeClass('menuAberto');
    });
  }

  $('.menu').accessibleDropDown();

});


//
// Menu móvel
//

$('.btoMenu').click(function() {
  $(this).siblings('.menu').children('.menuLista').toggleClass('menuAberto')
})

$('.temSubmenu span').click(function() {
  $(this).parent().toggleClass('submenuAberto')
})

$('.btoMenu').click(function() {
  $(this).children('i.fas').toggleClass('expandido');
})


