// Aguarda o carregamento completo da página //
$(document).ready(function () {
  // Evento que dispara sempre que o usuário digitar algo no campo //
  $("#tel").on("input", function () {
    // Remove tudo que não for número e limita a 11 digitos //
    let telefone = $(this).val().replace(/\D/g, "").slice(0, 11);

    // Formata conforme a quantidade digitada //
    if (telefone.length >= 11) {
      // Formata para celular - (xx) xxxx-xxxx //
      telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3");
    } else if (telefone.length >= 10) {
      // Formata para fixo - (xx) xxxx-xxxx //
      telefone = telefone.replace(/(\d{2})(\d{4})(\d{4})/, "($1) $2-$3");
    } else if (telefone.length >= 6) {
      // Mostra -  (xx) xxxx ou (xx) xxxx conforme digitado //
      telefone = telefone.replace(/(\d{2})(\d{4,5})/, "($1) $2");
    } else if (telefone.length >= 3) {
      // Mostra - (xx) com o começo do número //
      telefone = telefone.replace(/(\d{2})(\d{0,4})/, "($1) $2");
    } else if (telefone.length >= 1) {
      // Mostra apenas o parênteses abrindo //
      telefone = telefone.replace(/(\d{0,2})/, "($1");
    }

    $(this).val(telefone); // Atualiza o campo com o telefone formatado //
  });
});
