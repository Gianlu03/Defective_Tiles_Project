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
        if($_POST['format'] == 'notSelected' && $_POST['product'] == 'notSelected'){
            echo "Non hai inserito alcun valore";
        }
        else if($_POST['format'] == 'notSelected' && $_POST['product'] != 'notSelected'){
            $p = $_POST['product'];
            $query = "SELECT * FROM Elements where product = '$p' order by date_ins desc"; 
            $stmt = sqlsrv_query($conn_sql, $query);

            $counter = 0; 
            $table = "";

            while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
                //Variabil per Onclick JS                    
                $passDescrToJS = $row['descr'];
                $passFormatToJS = $row['format'];
                $passProductToJS = $row['product'];
                $passDateToJS = $row['date_ins'];

                if($counter == 0){ //Al primo giro crea la tabella
                    $table = $table."<table id = 'receiveTable' class='table table-striped table-hover'>
                    <tr> <thead>
                        <th scope='col'>#</th>
                        <th>Formato</td>
                        <th>Prodotto</td>
                        <th>Data Inserimento</td>
                    </thead> </tr>";
                }

                $counter++; //Incrementa in modo da avere valori numerati da 1

                //Creazione singolo elemento tabella
                $table = $table."<tr onclick = \"seeFullDescription('$passFormatToJS', '$passProductToJS', '$passDateToJS', '$passDescrToJS')\">";
                $table = $table."<th scope='row'>$counter</th>";
                $table = $table."<td >".$row['format']."cm</td>";
                $table = $table."<td>".$row['product']."</td>";
                $table = $table."<td>".$row['date_ins']."</td>";
                $table = $table."</tr>";
            }

            if($counter > 0)
                echo $table;
            else
                echo "Nessun elemento simile";
        }
        else if($_POST['format'] != 'notSelected' && $_POST['product'] == 'notSelected'){
            $f = $_POST['format'];
            $query = "SELECT * FROM Elements where format = '$f' order by date_ins desc"; 
            $stmt = sqlsrv_query($conn_sql, $query);

            $counter = 0; 
            $table = "";

            while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
                //Variabil per Onclick JS                    
                $passDescrToJS = $row['descr'];
                $passFormatToJS = $row['format'];
                $passProductToJS = $row['product'];
                $passDateToJS = $row['date_ins'];

                if($counter == 0){ //Al primo giro crea la tabella
                    $table = $table."<table id = 'receiveTable' class='table table-striped table-hover'>
                    <tr> <thead>
                        <th scope='col'>#</th>
                        <th>Formato</td>
                        <th>Prodotto</td>
                        <th>Data Inserimento</td>
                    </thead> </tr>";
                }

                $counter++; //Incrementa in modo da avere valori numerati da 1

                //Creazione singolo elemento tabella
                $table = $table."<tr onclick = \"seeFullDescription('$passFormatToJS', '$passProductToJS', '$passDateToJS', '$passDescrToJS')\">";
                $table = $table."<th scope='row'>$counter</th>";
                $table = $table."<td >".$row['format']."cm</td>";
                $table = $table."<td>".$row['product']."</td>";
                $table = $table."<td>".$row['date_ins']."</td>";
                $table = $table."</tr>";
            }

            if($counter > 0)
                echo $table;
            else
                echo "Nessun elemento simile";

        }
        else{
            $f = $_POST['format'];
            $p = $_POST['product'];
            
            //Query per ottenere valori con formato e prodotto simile ordinati per data 
            $query = "SELECT * FROM Elements where format = '$f' and product = '$p' order by date_ins desc"; 
            $stmt = sqlsrv_query($conn_sql, $query);

            $counter = 0; 
            $table = "";

            while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
                //Variabil per Onclick JS  
                $passDescrToJS = $row['descr'];
                $passFormatToJS = $row['format'];
                $passProductToJS = $row['product'];
                $passDateToJS = $row['date_ins'];

                if($counter == 0){ //Al primo giro crea la tabella
                    $table = $table."<table id = 'receiveTable' class='table table-striped table-hover'>
                    <tr> <thead>
                        <th scope='col'>#</th>
                        <th>Formato</td>
                        <th>Prodotto</td>
                        <th>Data Inserimento</td>
                    </thead> </tr>";
                }

                $counter++; //Incrementa in modo da avere valori numerati da 1

                //Creazione singolo elemento tabella
                $table = $table."<tr onclick = \"seeFullDescription('$passFormatToJS', '$passProductToJS', '$passDateToJS', '$passDescrToJS')\">";
                $table = $table."<th scope='row'>$counter</th>";
                $table = $table."<td >".$row['format']."cm</td>";
                $table = $table."<td>".$row['product']."</td>";
                $table = $table."<td>".$row['date_ins']."</td>";
                $table = $table."</tr>";
            }

            if($counter > 0)
                echo $table;
            else
                echo "Nessun elemento simile";
        }
    }
    
?>