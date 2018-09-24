// Em qualquer clique (rato ou teclado)
$(document).on('click keyup', function () {

  // Se a pesquisa estiver em foco
  if ($('input').is(':focus')) {

    // Esconde menu principal
    $('#menuPrincipal').hide()

  } else {
    $('#menuPrincipal').show()
  }
});