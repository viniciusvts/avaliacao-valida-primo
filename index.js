function verificarPrimo() {
    var numero = $('#numero').val();

    $.ajax({
        type: 'POST',
        url: 'validaprimo.php',
        data: { numero: numero },
        success: function (resultado) {
            alert(resultado);
        },
        error: function () {
            alert('Ocorreu um erro ao processar a solicitação.');
        }
    });
}