var cliente = {

    cadastrar: function(url, params) {
        //$('#loader-geral').css('display','block');
        $.post(url, params, function(retorno) {
        }).done(function (retorno) {
            $('.alert-success').text('Cadastro efetuado com sucesso');
            $('.alert-success').show();
        }).fail(function(response) {
            //$('#loader-geral').css('display','none');
            $('.alert-danger').text('Erro ao cadastrar');
            $('.alert-danger').show();
             //mensagem.validacao.tratarErrosIndiv(response);
        });
        },


    editar: function(url, params) {
        //$('#loader-geral').css('display','block');
        $.ajax({
            url:url,
            type: 'PUT',
            dataType: 'json',
            data: params,
            headers: {
                'X-CSRF-Token': $('input[name=_token]').val()
            }
        }).done(function(retorno) {
            $('.alert-success').text('Dados alterados com sucesso');
            $('.alert-success').show();
            //$('#loader-geral').css('display','none');
        }).fail(function(response) {
            $('.alert-danger').text('Erro ao alterar os dados');
            $('.alert-danger').show();
           //$('#loader-geral').css('display','none');
           //mensagem.validacao.tratarErrosIndiv(response);
        });
    },

    excluir: function(event) {
        swal({
                title: "Você tem certeza ?",
                text: "Você realmente deseja excluir este cliente?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim, excluir!",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false
            },
            function(){
                //$('#loader-geral').css('display','block');
                $.ajax({
                    url:$(event).attr('data-bind'),
                    type: 'DELETE',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('input[name=_token]').val()
                    }
                }).done(function(retorno) {
                    //$('#loader-geral').css('display','none');
                    $('.alert-success').text('CLiente excluído com sucesso');
                    $('.alert-success').show();
                    //mensagemComRefresh('Sucesso', 'Programa excluído com sucesso', 'success', 3000);
                }).fail(function(response) {
                    $('.alert-danger').text('Erro ao excluir ciente');
                    $('.alert-danger').show();
                    //$('#loader-geral').css('display','none');
                   //mensagem.validacao.tratarErro(response);
                });
            });
    }
};