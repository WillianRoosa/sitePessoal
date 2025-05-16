$(function () {
  // Aqui armazena todo nosso JavaScript //
  $("nav.mobile").click(function () {
    // Função que dará ação ao Nav.Mobile - Abrir ou Fechar o menu //
    const listaMenu = $("nav.mobile ul");

    if (listaMenu.is(":hidden") === true) {
      const icone = $(".botao-menu-mobile i");
      icone.removeClass("fa-bars");
      icone.addClass("fa-times");
      listaMenu.slideToggle();
    } else {
      const icone = $(".botao-menu-mobile i");
      icone.removeClass("fa-times");
      icone.addClass("fa-bars");
      listaMenu.slideToggle();
    }

    // Abrir através do FadeIn //
    /*
    if (listaMenu.is(":hidden") == true) {
      listaMenu.fadeIn();               
    } else {
      listaMenu.fadeOut();
    }
    */

    // Abrir ou fechar menu sem efeitos. //
    /*
      if(listaMenu.is(':hidden') == true){
        listaMenu.show();
        listaMenu.css('display','block');
      }else{
        listaMenu.hide();
        listaMenu.css('display', 'none');
      }
      */
  });

  if ($("target").length > 0) {
    // O elemento existe, portanto é necessário um scroll nos elementos. //
    const elemento = "#" + $("target").attr("target");
    const divScroll = $(elemento).offset().top;
    $("html,body").animate({ scrollTop: divScroll }, 1000);
  }
});
