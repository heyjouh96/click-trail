$(main);

function main(){
    
    $(".click-solo").click(function(e){
        alert(e.currentTarget.id);
        //console.log(e);
        //alert(window.location.href);
        sendClick(e.currentTarget.id);
    });
    
    
    function sendClick(id){
        var novoId = id;
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "clickcount.php",
            data: {id: id}
        });
    }
    
}