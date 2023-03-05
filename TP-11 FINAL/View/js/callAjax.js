

function insertPenalite() {
    $('#form').bind('submit', function(){
       $.ajax({
        type: "POST",
        url: "../controller/executeBalance.php",
        data: $('form').serialize(),
        success: function (response) {
            if (response === 'ok') {
                alert('sale balance ! ');
                // location.href = "../View/historique.php";
            }else {
                alert('sale balance ! ');
            }
        }
    });
    return false; 
    });
    
}