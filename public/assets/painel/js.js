/**
 * js.js
 * @version: v1.0.2022
 * @author: Joubert Luna
 *
 *  Classe JS padrão para todo o sistema
 *  Inclui mensegem e visualização de imagem antes de inserir no sistema
 * 
 */


$(function () {
  $(".filtro").click(function () {
    $(".mostraFiltro").slideToggle();
    $(this).toggleClass("active");
    return false;
  });

  $(".mobmenu").click(function () {
    $(".menu-lateral").slideToggle();
    $(this).toggleClass("active");
    return false;
  });

  $(".senha").click(function () {
    $(".mostraCampo").slideToggle();
    $(this).toggleClass("active");
    return false;
  });

  $(function () {
    $("#tab").tabs();
  });

  $("#accordion").accordion({
    collapsible: true,
    autoHeight: false,
    active: false,
    heightStyle: "content",
  });
});

function excluir(obj) {
  var entidade = $(obj).attr("data-entidade");
  var id = $(obj).attr("data-id");
  if (confirm("Deseja realmente excluir ?")) {
    window.location.href = base_url + entidade + "/excluir/" + id;
  }
}

function fecharMsg(obj) {
  $(".msg").hide();
}

function pegaArquivo(files) {
  var file = files[0];
  const fileReader = new FileReader();

  fileReader.onloadend = function() {
	$("#imgup").attr("src", fileReader.result);

  }
  fileReader.readAsDataURL(file);

}
