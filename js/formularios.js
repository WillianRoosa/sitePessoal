$(function () {
  // Captura evento de Submit de qualquer Form //
  $("body").on("submit", "form", function () {
    let form = $(this); // Pega o Form enviado //
    $.ajax({
      beforeSend: function () {
        // Executa antes de enviar //
        $(".overlay-loading").fadeIn();
      },
      url: include_path + "ajax/formularios.php", // Endereço do arquivo PHP //
      method: "post", // Método POST //
      dataType: "json", // Espera resposta JSON //
      data: form.serialize(), // Serializa os dados do Form //
    })
      .done(function (data) {
        $(".overlay-loading").fadeOut(); // Esconde o loading após resposta //
        if (data.sucesso) {
          $(".sucesso").fadeIn(); // Mostra mensagem de sucesso //
          setTimeout(function () {
            $(".sucesso").fadeOut(); // Esconde após 2s //
          }, 2000);
          form.trigger("reset");
        } else {
          $(".erro").fadeIn(); // Mostra mensagem de erro //
          setTimeout(function () {
            $(".erro").fadeOut(); // Esconde após 4s //
          }, 4000);
          form.trigger("reset");
        }
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        $(".overlay-loading").fadeOut(); // Esconde o loading em caso de falha //
        $(".erro").fadeIn(); // Mostra mensagem de erro //
        setTimeout(function () {
          $(".erro").fadeOut(); // Esconde após 4s //
        }, 4000);
        console.error("Erro na requisição: ", jqXHR, textStatus, errorThrown); // Mostra erro JS //
        form.trigger("reset");
      });
    return false; // Evita o envio tradicional //
  });
});
