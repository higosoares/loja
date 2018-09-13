$(document).ready(function() {
    $('.alert').hide();
    $('#form_cliente_cadastrar').submit(function(e) {
        cliente.cadastrar(this.action, $(this).serialize());
        e.preventDefault();
    });
});