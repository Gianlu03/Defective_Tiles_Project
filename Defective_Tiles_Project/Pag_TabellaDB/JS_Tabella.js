//codice lettura tabella
$(document).ready(function() {
    $("#aggiorna").click(function(e) {
        e.preventDefault();
        $.post("PHP/AggiornaTabella.php", function(data) {
            document.getElementById("par").innerHTML = data;
        });
    });
});

//Mostra descrizione in sezione blu
function showDetails(format, product, data, descr) {
    document.getElementById("descriptionBar").innerText = descr;
}