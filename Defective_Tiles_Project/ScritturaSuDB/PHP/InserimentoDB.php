<?php 
    if($_POST['format'] == 'notSelected' || $_POST['product'] == 'notSelected'){
        echo "Non hai compilato correttamente i campi.";
        return;
    }
    else if($_POST['description'] == ""){
        echo "La descrizione non può essere vuota!";
        return;
    }
    else if($_POST['description'] == "Inserisci descrizione:"){
        echo "Attento! non hai modificato la descrizione!";
        return;
    }
    else{
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

        if($conn_sql == false){
            //se falso si è verificato errore
            echo "Connessione al database fallita!";
            return;
        }
        else{

            $f = $_POST['format'];
            $p = $_POST['product'];
            $d = $_POST['description'];
            $date = date ("Y-m-d");

            $query = "SELECT * FROM Elements where format = '$f' and product = '$p' and descr = '$d' and date_ins = '$date'"; 
            $stmt = sqlsrv_query($conn_sql, $query);

            $counter = 0;
            while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
                $counter++;
            }

            if($counter == 0){ // no doppione
                $query = "INSERT INTO Elements VALUES('$f','$p','$date','$d')"; 
                $stmt = sqlsrv_query($conn_sql, $query);
                echo "Elemento inserito correttamente!";
            } 
            else{
                echo "E' già presente un elemento uguale. Inserimento Bloccato";
            }
        }
    }
?>