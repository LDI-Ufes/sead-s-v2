// Em qualquer clique ou navegação por teclado
$(document).on('click keyup', function () {

  // Se o input da pesquisa estiver em foco
  if ($('#formPesquisa input').is(':focus')) {

    // Esconde menu principal
    $('#menuPrincipal').addClass('esconder')
    $('#formPesquisa').addClass('formPesquisaAtivo')

    // Ou se o botão da pesquisa estiver em foco
  } else if ($('#formPesquisa .botaoSubmissao').is(':focus')) {

    // Esconde menu principal
    $('#menuPrincipal').addClass('esconder')
    $('#formPesquisa').addClass('formPesquisaAtivo')

    // Se não
  } else {

    // Esconde a pesquisa e mostra o menu
    $('#formPesquisa').removeClass('formPesquisaAtivo')
    $('#menuPrincipal').removeClass('esconder')
  }
});

// Em cliques no botão falso
$('.botaoFalso').on('click', function () {

  // Esconde o menu e mostra a pesquisa
  $('#menuPrincipal').addClass('esconder')
  $('#formPesquisa').addClass('formPesquisaAtivo')

  // Guia o foco para a pesquisa
  $('#formPesquisa input').focus()

  // Evita que a função anterior propague
  return false;
});

// Em cliques na pesquisa
$('#formPesquisa input').on('click', function () {

  // Esconde o menu e mostra a pesquisa
  $('#menuPrincipal').addClass('esconder')
  $('#formPesquisa').addClass('formPesquisaAtivo')

  // Guia o foco para a pesquisa
  $('#formPesquisa input').focus()

  // Evita que a penúltima função propague
  return false;
});


