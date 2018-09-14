
// Menu acessível via teclado
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
