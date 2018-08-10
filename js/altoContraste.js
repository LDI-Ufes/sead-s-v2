$(function () {

  let contraste = localStorage.getItem('contraste') || 0

  $("#contrasteBto").click(function (evento) {
    evento.preventDefault()
    $("body").toggleClass("contraste")
  })

  if (contraste == 1) {
    $("body").addClass("contraste")
  } else {
    $("body").removeClass("contraste")
  }

  $("#contrasteBto").click(function () {

    if (contraste == 1) {
      contraste = 0
      localStorage.setItem('contraste', 0)
    } else {
      contraste = 1
      localStorage.setItem('contraste', 1)
    }
  })
})


//$(function () {
//  
//  let tamanhoLetra = localStorage.getItem('tamanhoLetra') || 12
//
//  $("#diminuirLetra").click(function () {
//    tamanhoLetra--
//    $("html").css("font-size", tamanhoLetra)
//    localStorage.setItem('tamanhoLetra', tamanhoLetra)
//  })
//
//  $("#aumentarLetra").click(function () {
//    tamanhoLetra++
//    $("html").css("font-size", tamanhoLetra);
//    localStorage.setItem('tamanhoLetra', tamanhoLetra);
//  })
//
//  $("#reiniciarLetra").click(function () {
//    tamanhoLetra = 12
//    $("html").css("font-size", tamanhoLetra)
//    localStorage.setItem('tamanhoLetra', tamanhoLetra)
//  })
//
//})