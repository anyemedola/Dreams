
$(document).on('click', '.link-scroll', function(e) {	

	let target = $(this).attr('data-target');
	
	
	let target_offset = $("#"+target).offset();
	let target_top = target_offset.top;

	$('html, body').animate({ scrollTop: (target_top - 45) }, 800);
	
});


$(window).on ('load', function (){ // makes sure the whole site is loaded

	// -------------------- Site Preloader
	$('#loader').fadeOut(); // will first fade out the loading animation
	$('#loader-wrapper').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
	$('body').delay(350).css({'overflow':'visible'});
})

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

var email = document.getElementById("email")
  , confirm_email = document.getElementById("confirm_email");

function validateEmail(){
  if(email.value != confirm_email.value) {
    confirm_email.setCustomValidity("Emails diferentes!");
  } else {
    confirm_email.setCustomValidity('');
  }
}

email.onchange = validateEmail;
confirm_email.onkeyup = validateEmail;


// <!-- Adicionando Javascript -->

    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('end').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cid').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('end').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cid').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('end').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cid').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    $(document).ready(function(){
      $(".telefone").mask("(99) 9999-9999");
      $(".whats").mask("(99) 99999-9999");
      $(".cep").mask("99999-999");
      $(".cpf").mask("999.999.999-99");
      });

      $("#form-login").submit(function(){
        alert("aaaaaaa");
        $(this).find('button').html('<i class="fa fa-spin fa-spinner"></i>')
      });


      $(document).click(function (event) {
        $('.navbar-collapse').collapse('hide');
      });

      var close = document.getElementById('close');
var popup = document.getElementById('popup');

close.addEventListener("click", function() {
  popup.style.display = 'none';
});

$(document).on('ready', function() {
  $(".regular").slick({
  dots: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});
});