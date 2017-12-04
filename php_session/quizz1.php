<?php
session_start();

if (isset($_POST['franceCapitale']) 
    && isset($_POST['italieCapitale'])
    && isset($_POST['espagneCapitale'])) {

    $franceCapitale = $_POST['franceCapitale'];
    $_SESSION["franceCapitale"] = strtoupper($franceCapitale);
    
    $italieCapitale = $_POST['italieCapitale'];
    $_SESSION["italieCapitale"] = strtoupper($italieCapitale);
    
    $espagneCapitale = $_POST['espagneCapitale'];
    $_SESSION["espagneCapitale"] = strtoupper($espagneCapitale);
    
    header("Location: quizz2.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Grand quizz des capitales</title>
        
        <link 
            rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
            crossorigin="anonymous">
        
        <link rel="stylesheet" href="styles/quizz.css">
        
    </head>

    <body>
        
        <div id="main">
        
            <h1>Bienvenue dans ce quizz sur les capitales</h1>
            
            <h2>Commençons par l'Europe</h2>

            <form method="post" action="quizz1.php">
                <div class="form-group">
                    <label for="franceCapitale">Capitale de la France</label>
                    <input type="text" class="form-control" id="franceCapitale" name="franceCapitale" required>
                </div>
                
                <div class="form-group">
                    <label for="italieCapitale">Capitale de l'Italie</label>
                    <input type="text" class="form-control" id="italieCapitale" name="italieCapitale" required>
                </div>
                
                <div class="form-group">
                    <label for="espagneCapitale">Capitale de l'Espagne</label>
                    <input type="text" class="form-control" id="espagneCapitale" name="espagneCapitale" required>
                </div>
                
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-arrow-right"></span> Valider mes réponses et passer au continent suivant <span class="glyphicon glyphicon-arrow-right"></span></button>
            </form>
            
        </div>
        
        <script 
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>

        <script 
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
            crossorigin="anonymous"></script>
    </body>
</html>