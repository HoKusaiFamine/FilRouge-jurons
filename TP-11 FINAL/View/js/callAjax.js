

function insertPenalite() {
    $.ajax({
        type: "POST",
        url: "../controller/executeBalance.php",
        data: "data",
        dataType: "dataType",
        success: function (response) {
            
        }
    });
}