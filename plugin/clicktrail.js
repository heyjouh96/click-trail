$(main);

function main(){
    $(".click-solo").click(function(e){
        var ds = $(this).attr('data-click');
        alert(ds);
        sendClick(ds, location.hostname);
    });
    
    
    function sendClick(ds, dominio){
        var novoDs = ds;
        var novoDominio = dominio;
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "https://click-trail-wickedjhow.c9users.io/click-trail/site/getClick",
            data: {ds: ds, dominio: dominio}
        });
    }
    
    
    
    
}