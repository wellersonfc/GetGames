
/**Função JQuery para cep  */
jQuery(function ($) {
    $("#cep").change(function () {
        var cep_code = $(this).val();
        if (cep_code.length <= 0) return;
        $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
            function (result) {
                if (result.status != 1) {
                    alert(result.message || "Houve um erro desconhecido");
                    return;
                }
                $("input#cep").val(result.code);
                $("input#estado").val(result.state);
                $("input#cidade").val(result.city);
                $("input#bairro").val(result.district);
                $("input#endereco").val(result.address);
                $("input#estado").val(result.state);
            });
    });
});


/**Mascara Documento - preencher formulario  */
function formatar(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1);
    var texto = mascara.substring(i)

    if (texto.substring(0, 1) != saida) {
        documento.value += texto.substring(0, 1);
    }

}

/* Redirecionar  ao  formulario */
function redirecionar()
{
location.href="formulario1.html"
}



