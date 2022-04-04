var cont = 1;
function QtdCadastros(){
    var cpf = '';
    var id_cadastro = '';

    fetch("quantidade_cadastro.php",{
        method: 'POST',
        body:{id:0}
    }).then((response) =>{
        return response.text();
    }).then(async (html) => {
        html = JSON.parse(html);
        $('#qtd').html(html.length);
        
        for (let index = 0; index < html.length; index++) {
            cpf = html[index]['cpf'];
            id_cadastro = html[index]['id_cadastro'];
            $('#lista').append('----COMEÇOU ----<br>');
            $('#lista').append('<b>'+cont+') </b>'+cpf+'<br>');
            await inserePontos(cpf, id_cadastro);
            $('#lista').append('----FINALIZOU ----<br><br>');

        }
    }).then((aaaaa) =>{
        $('#lista').append("<h1>That's all folks!!!</h1>");
    });


}


async function inserePontos(cpf, id_cadastro){
    return new Promise((resolve, reject) =>{
        $.ajax({
            url: `insere_pontos.php`,
            type: 'POST',
            data: {cpf: cpf, id_cadastro: id_cadastro},
            success:function(resposta) {
                $('#lista').append(resposta);
                console.log(resposta)
                cont++;
                resolve();
            }
        })
    });
}

QtdCadastros()