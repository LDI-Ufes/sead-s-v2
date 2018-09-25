// Em qualquer clique (rato ou teclado)
//$(document).on('click keyup', function () {
//
//  // Se a pesquisa estiver em foco
//  if ($('input').is(':focus')) {
//
//    // Esconde menu principal
//    $('#menuPrincipal').hide()
//    $('#formPesquisa').addClass('formPesquisaAtivo')
//
//  } else {
//    $('#menuPrincipal').show()
//    $('#formPesquisa').removeClass('formPesquisaAtivo')
//  }
//});

$(document).on('click', function() {
  
  $('#formPesquisa').removeClass('formPesquisaAtivo');
  
})


$('.botaoFalso').on('click', function () {

  $('#formPesquisa').addClass('formPesquisaAtivo');
  $('#formPesquisa input').focus();
  return false;
  
});

$('#formPesquisa input').on('click', function () {

  $('#formPesquisa').addClass('formPesquisaAtivo');
  $('#formPesquisa input').focus();
  return false;
  
});

$(document).on('click keyup', function () {

  if ($('#formPesquisa input').is(':focus')) {

    $('#formPesquisa').addClass('formPesquisaAtivo');
    
  } else if ($('#formPesquisa .botaoSubmissao').is(':focus')) {
    
    $('#formPesquisa').addClass('formPesquisaAtivo');
    
  } else {
    $('#formPesquisa').removeClass('formPesquisaAtivo');
  }
    
});
