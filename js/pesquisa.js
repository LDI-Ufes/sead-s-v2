// Em qualquer clique ou navegação por teclado
$(document).on('click keyup', function () {

  // Se o input da pesquisa estiver em foco
  if ($('#formPesquisa input').is(':focus')) {

    // Ativa adaptação especial (visual e comportamento)
    $('.topo').addClass('formPesquisaAtivo')

    // Ou se o botão da pesquisa estiver em foco
  } else if ($('#formPesquisa .botaoSubmissao').is(':focus')) {

    // Ativa adaptação especial (visual e comportamento)
    $('.topo').addClass('formPesquisaAtivo')

    // Se não
  } else {

    // Remove adaptação especial
    $('.topo').removeClass('formPesquisaAtivo')
  }
});

// Em cliques no botão falso
$('.botaoFalso').on('click', function () {

  // Ativa adaptação especial (visual e comportamento)
  $('.topo').addClass('formPesquisaAtivo')

  // Guia o foco para a pesquisa
  $('#formPesquisa input').focus()

  // Evita que a função anterior propague
  return false;
});

// Em cliques na pesquisa
$('#formPesquisa input').on('click', function () {

  // Ativa adaptação especial (visual e comportamento)
  $('.topo').addClass('formPesquisaAtivo')

  // Guia o foco para a pesquisa
  $('#formPesquisa input').focus()

  // Evita que a penúltima função propague
  return false;
});


