var mensagem = {};
mensagem.validacao = {
    retornoValidacaoRequisicao: function(response) {
        if (!response.responseJSON.resultado) {
            msg = '';
            $.each(response.responseJSON, function(k,v) {
                msg += v + '\n\r';
            });
            return msg;
        }
        return;
    },

    retornoExcecaoDominio: function(response) {
        var msg = '';
        if (!response.responseJSON.resultado.errors) {
            return response.responseJSON.resultado;
        }
        var errors = JSON.parse(response.responseJSON.resultado).errors;
        $.each(errors, function(k, v) {
            $.each(v, function(k2, v2) {
                msg = v2;
            });
        });
        return msg;
    },

    tratarErro: function(response) {
        var msg = mensagem.validacao.retornoValidacaoRequisicao(response);
        if (msg) {
            mensagemFechaSozinha('Erro', msg, 5000);
            return;
        }
        var msg = mensagem.validacao.retornoExcecaoDominio(response);
        mensagemFechaSozinha('Erro', msg, 5000);
    },

    //Necessario criar um <span class="help-block" style="display: none"></span> embaixo do input ou select
    tratarErrosIndiv : function(response) {
        //Limpa todos os erros
        mensagem.validacao.removerTodosErros();
        $.each(response.responseJSON, function(k,v) {
            mensagem.validacao.mostrarErrosIndiv(k, v);

            //Para validacoes no validate que nao estao nas regras do Validator
            //Causadas pelo EvgException
            if(k === 'resultado') {
                //Caso na response em mensagem esteja escrito diretamente o erro sem array
                if(v.indexOf('mensagem') === -1){
                    mensagemFechaSozinha('Erro',v, 5000);
                } else {
                    var resultado = JSON.parse(v);
                    var error = resultado.erro;
                    if (error) {
                        $.each(error, function (k, v) {
                            $.each(v, function (k2, v2) {
                                //Caso a exeçao tenha found ou invalid, lança mensagem do sweet alert
                                if(k2 === 'found' || k2 === 'invalid'){
                                    mensagemFechaSozinha('Erro',v2, 5000);
                                } else {
                                    //Se nao coloca mensagem em cada campo
                                    mensagem.validacao.mostrarErrosIndiv(k, v2);
                                }
                            });
                        });
                    }
                }
            }
        });
    },

    mostrarErrosIndiv : function(k, v) {
        var campo = $('#' + k);
        //Caso nao consiga pegar pelo id, pega pelo name
        if (campo.length === 0) {
            campo = $('[name=' + k + ']');
        }
        var div = campo.closest('.form-group');
        div.addClass('has-error');
        div.find('span.help-block').text(v);
        div.find('span.help-block').attr("style", "display:block");
    },

    removerTodosErros : function(){
        $('.form-group.has-error').removeClass('has-error');
        $('.form-group').find('span.help-block').attr("style", "display:none");
    },
};