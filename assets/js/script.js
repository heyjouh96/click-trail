window.onload = main();

function main(){
    
    $('#trocarNome, #trocarEmail, #trocarSenha').click(function(e){
        var btn = $('#confirmaSenha');
        var prop = document.createAttribute('itemprop');
        prop.value = this.id;
        btn.setAttribute(prop);
    });
    
    $('#confirmaSenha').click(function(e){
        var senha = $("#confsenha").val();
        //var btn = this.getAttribute('itemprop');
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "https://click-trail-wickedjhow.c9users.io/click-trail/usuario/confirmaSenha",
            success: function (resposta) {
                var dados = resposta;
                if(dados == true){
                   window.location = "https://click-trail-wickedjhow.c9users.io/click-trail/usuario/trocarNome";
                }
            },
            data: {senha: senha, btn: btn}
        });
        
        
    });
    
    
    
}