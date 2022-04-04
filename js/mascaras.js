function maskCnpjCpf(selector) {
    var CpfCnpjMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
    },
    cpfCnpjOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
        }
    };
    $(function() {
        $(selector).bind('paste', function(e) {
            $(this).unmask();
        });
        $(selector).bind('input', function(e) {
            $(selector).mask(CpfCnpjMaskBehavior, cpfCnpjOptions);
        });
    });
}

maskCnpjCpf('.cpf_cnpj');
maskCnpjCpf('.cpf_cnpjnew');

$(document).ready(function(){
    $(".telefone").mask("(99) 9999-9999");
    $(".whats").mask("(99) 99999-9999");
    $(".cep").mask("99999-999");
    $(".cpf").mask("999.999.999-99");
    });

function MkTelefone(){
    $(".telefone").mask("(99) 9999-9999");
}
function MkWhats(){
    $(".whats").mask("(99) 99999-9999");
}

