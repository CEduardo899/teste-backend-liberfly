$(document).ready(function () {

    $('#telefone').mask('(00) 00000-0000');
    $('#num_voo').mask('0#');

    //Validação telefone padrão BR...
    jQuery.validator.addMethod("telefoneBR", function (value, element) {
        return this.optional(element) || /^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$/.test(value);
    }, "Por favor inserir um telefone válido. '(xx) xxxxx-xxxx'");

    //Validação para verificar se o destino é diferente da origem...
    jQuery.validator.addMethod("origemXdestino", function (value, element) {

        return $('#origem').val() != $('#destino').val() ;
    }, "Destino tem que ser diferente da origem.");

    $('#form-passageiro').validate({ // initialize the plugin
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            telefone: {
                required: true,
                telefoneBR: true
            },
            email: {
                required: true,
                email: true
            },

            origem: {
                required: true
            },
            destino: {
                required: true,
                origemXdestino: true
            },
            num_voo: {
                required: true,
                digits: true
            }
        }
    });
});
