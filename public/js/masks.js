$(document).ready(function () {
    var campoCPF = $("#cpf_cliente");
    var campoTel = $("#tel_cliente");
    campoCPF.mask('000.000.000-00', {reverse: true});
    campoTel.mask('00-00000-0000', {reverse: true});
});