$(document).ready(function() {
    $('.alert').hide();
    $('#form_cliente_editar').submit(function(e) {
        cliente.editar(this.action, $(this).serialize());
        e.preventDefault();
    });
});