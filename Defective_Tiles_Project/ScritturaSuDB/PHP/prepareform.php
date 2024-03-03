<?php 
function prepareForm(){
    $serverName = "DESKTOP-4P54JP2";
    $sql_dbnm = "DatabaseSito";
    // $sql_user = "SA";
    // $sql_pswd = "ServerGian";

    $connectionOptions = array(
        "database" => "$sql_dbnm",
        // "uid" => "$sql_user",
        // "pwd" => "$sql_pswd"
    );

    $conn_sql = sqlsrv_connect($serverName, $connectionOptions);

    $formF = "<select id = 'format' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example'>
            <option value = 'notSelected' selected>Seleziona formato:</option>";

    $formP = "<select id = 'product' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example'>
            <option value = 'notSelected' selected>Seleziona prodotto:</option>"; 

    //variabili per dati unici nei form temporanee
    $actFormat = "";
    $actProduct = "";

    //Array per controllare unicità valore
    $formats = array();
    $products = array();

    //Query per formati
    $query = "SELECT * FROM FormatsList order by format asc"; //ricerca valori con formato crescente
    $stmt = sqlsrv_query($conn_sql, $query);

    //Ciclo per raccogliere formati unici in ordine crescente
    while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
        $actFormat = $row['format'];

        // if(!in_array($actFormat, $formats)){
        $formF = $formF."<option value='$actFormat'>".$actFormat.".</option>";
        //     array_push($formats, $actFormat);
        // }

    }
    $formF = $formF."</select>"; 
    //chiudo form formato

    //Query per raccogliere prodotti unici in ordine alfabetico(crescente)
    $query = "SELECT * FROM ProductsList order by product asc"; //ricerca valori con formato crescente
    $stmt = sqlsrv_query($conn_sql, $query);

    while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
        $actProduct = $row['product'];

        // if(!in_array($actProduct , $products)){
            $formP = $formP."<option value='$actProduct'>".$actProduct.".</option>";
        //     array_push($products, $actProduct);
        // }

    }
    $formP = $formP."</select>";        

    //mando form in variabili accessibili da html
    $_GET['form1'] = $formF;
    $_GET["form2"] = $formP;
}

?>