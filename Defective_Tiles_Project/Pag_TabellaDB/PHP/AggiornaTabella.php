<?php
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

    if(!$conn_sql){
        //se falso si è verificato errore
        echo "Connessione al database fallita!";
    }
    else{
        $query = "SELECT * FROM Elements order by date_ins desc"; 
        $stmt = sqlsrv_query($conn_sql, $query);

        $counter = 0;
        $table = "";

        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
            //Variabil per Onclick JS   
            $SubStr = $row['descr'];

            if(strlen($row['descr']) > 8)
                $SubStr = substr($row['descr'], 0, 8)."...";
            
            $passDescrToJS = $row['descr'];
            $passFormatToJS = $row['format'];
            $passProductToJS = $row['product'];
            $passDateToJS = $row['date_ins'];

            if($counter == 0){ //Al primo giro crea la tabella
                $table = $table."<table id = 'receiveTable' class='table table-striped table-hover'>
                <tr> <thead>
                    <th scope='col'>#</th>
                    <th>Formato</th>
                    <th>Prodotto</th>
                    <th>Data Inserimento</th>
                    <th>Descrizione</th>
                </thead> </tr>";
            }

            $counter++; //Incrementa in modo da avere valori numerati da 1

            //Creazione singolo elemento tabella
            $table = $table."<tr onclick = \"showDetails('$passFormatToJS', '$passProductToJS', '$passDateToJS', '$passDescrToJS')\">";
            $table = $table."<th scope='row'>$counter</th>";
            $table = $table."<td >".$row['format']."cm</td>";
            $table = $table."<td>".$row['product']."</td>";
            $table = $table."<td style = 'text-align: center; width:30%;'>".$row['date_ins']."</td>";
            $table = $table."<td>".$SubStr."</td>";
            $table = $table."</tr>";
        }

        if($counter > 0){
            $table = $table."</table>";
            echo $table;
        }
            
        else
            echo "Tabella SQL Vuota!";
    }
?>