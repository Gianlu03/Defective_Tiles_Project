function seeFullDescription(format, product, date, description) {
    var box = document.getElementsByTagName("textarea")[1];
    box.innerHTML = "[" + description + "]    " + product + " - " + format + "     Data Inserimento: " + date;
}

$(document).ready(function() {
    $("#btnSimili").click(function(e) {
        e.preventDefault();
        let format = $("#format").val();
        let product = $("#product").val();
        $.post("PHP/TrovaSimili.php", {
            format: format,
            product: product
        }, function(data) {
            document.getElementById("par").innerHTML = data;
        });
    });

    $("#btnInserimento").click(function(e) {
        e.preventDefault();
        let format = $("#format").val();
        let product = $("#product").val();
        let description = $("#description").val();
        $.post("PHP/InserimentoDB.php", {
            format: format,
            product: product,
            description: description
        }, function(data) {
            alert(data);
        });
    });


});