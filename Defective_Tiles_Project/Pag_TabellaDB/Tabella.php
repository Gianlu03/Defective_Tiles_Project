<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../Style/bootstrap.min.css" rel="stylesheet">
    <link href= "Style/StyleTabella.css" rel = "stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src = "JS_Tabella.js">
        
    </script>

</head>

<body>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <span class="text-muted">
                <img src="../Images/logo.png" class="logo">
                <a class="nav-link active" aria-current="page" href="../Home.html">Home</a>
                <a class="nav-link active"  aria-current="page" href="http://localhost/PHPprojects/IperSito/ScritturaSuDB/ScritturaSuDB.php">Ricerca</a>
                <a class="nav-link active" id = "actualPage" aria-current="page" href="#">SQL</a>
            </span>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <h3 class="HomeTitle">Ricerca SQL</h3>
        </div>
    </nav>
    <!--    //-----------------------------------------//   -->


    <!--    //-----------------WRAPPER-----------------//   -->
    <div class="homeWrapper">
        
    <h1 id = "Title">Tabella SQL:</h1>
    
    <div  style = "text-align:center;">
        <button id = "aggiorna" type="button" class="btn btn-primary" style = "width: auto; margin-top: 10px; margin-bottom: 10px;" >Aggiorna</button>
    </div>   
        <div class = "ScrollWindow">
            <p id="par"></p>
        </div>

        <br>

        <!-- codice simbolo 'info' -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
        </svg>

        <div class="alert alert-primary d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div id = "descriptionBar">
                Clicca un elemento per visualizzarne la descrizione completa!
            </div>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>