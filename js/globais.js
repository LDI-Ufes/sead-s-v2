
// Plugin To Top
$("#to_top_scrollup").prop("title", "Voltar ao topo")

// Fechar atalhos de navegação com Esc
$(document).keyup(function(e) {
  if (e.keyCode === 27) window.open('#barra-brasil', '_self')
});
