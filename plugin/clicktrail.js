$(main);

function main(){
    
    $(".click-solo").click(function(e){
        alert(e.currentTarget.id);
        alert(location.hostname);
        //console.log(e);
        //alert(window.location.href);
        sendClick(e.currentTarget.id, location.hostname);
    });
    
    
    function sendClick(id, host){
        var novoId = id;
        var novoHost = host;
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "https://click-trail-wickedjhow.c9users.io/click-trail/painel/getclick",
            data: {id: id, host: host}
        });
    }
    
}