<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../Style/bootstrap.min.css" rel="stylesheet">
    <link href= "Style/StyleScrittura.css" rel = "stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script src = "JS_Scrittura.js">
        
    </script>

    <?php include "PHP/prepareform.php" ?>

</head>

<body>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <span class="text-muted">
                <img src="../Images/logo.png" class="logo">
                <a class="nav-link active" aria-current="page" href="../Home.html">Home</a>
                <a class="nav-link active" id = "actualPage" aria-current="page" href="#">Ricerca</a>
                <a class="nav-link active" aria-current="page" href="http://localhost/PHPprojects/IperSito/Pag_TabellaDB/Tabella.php">SQL</a>
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

    <H1 id = "HomeTitle">Inserimento nel database</H1>  
        
        <hr>  <!-- ------------------------------------ -->

        <form name="form" id="form" method="post" action="">
                <?php 
                    prepareForm();
                    if(isset($_GET['form1']))
                        echo $_GET['form1'];
                    if(isset($_GET['form2']))
                        echo $_GET['form2'];
                ?>

            <div class="mb-3" style = " margin-left: auto; margin-right: auto; ">
                <!-- <label for="exampleFormControlTextarea1" class="form-label"></label> -->
                <textarea id = "description" style = "resize:none; font-size: 18px;" name = "newDescr" class="form-control"  rows="3" >Inserisci descrizione:</textarea>
            </div>

            <div style = "text-align:center;">
                <button id = "btnSimili" type="button" class="btn btn-primary"  >Visualizza elementi simili</button>
                <button id = "btnInserimento" type="button" class="btn btn-primary"  >Inserisci elemento nel DB</button>
            <div>
        </form>

        <br><br>
        <div class = "ScrollWindow">
            <p id="par"></p>
        </div>

        <hr>  <!-- ------------------------------------ -->

        <div class="mb-3" style = " margin-left: auto; margin-right: auto; ">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
                <h4 style = 'text-align:center;'>Descrizione:</h4>
            <textarea style = "resize:none;" disabled  name = "endD" class="form-control" id="exampleFormControlTextarea1" rows="3" style = "text-align:left;"></textarea>
        </div>
        
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>