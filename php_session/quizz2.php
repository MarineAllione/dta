<?php
session_start();

if (isset($_POST['senegalCapitale']) 
    && isset($_POST['algerieCapitale'])
    && isset($_POST['egypteCapitale'])) {

    $senegalCapitale = $_POST['senegalCapitale'];
    $_SESSION["senegalCapitale"] = strtoupper($senegalCapitale);
    
    $algerieCapitale = $_POST['algerieCapitale'];
    $_SESSION["algerieCapitale"] = strtoupper($algerieCapitale);
    
    $egypteCapitale = $_POST['egypteCapitale'];
    $_SESSION["egypteCapitale"] = strtoupper($egypteCapitale);
    
    header("Location: results.php");
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
            
            <h2>Continuons par l'Afrique</h2>

            <form method="post" action="quizz2.php">
                <div class="form-group">
                    <label for="senegalCapitale">Capitale du Sénégal</label>
                    <input type="text" class="form-control" id="senegalCapitale" name="senegalCapitale" required>
                </div>
                
                <div class="form-group">
                    <label for="algerieCapitale">Capitale de l'Algérie</label>
                    <input type="text" class="form-control" id="algerieCapitale" name="algerieCapitale" required>
                </div>
                
                <div class="form-group">
                    <label for="egypteCapitale">Capitale de l'Egypte</label>
                    <input type="text" class="form-control" id="egypteCapitale" name="egypteCapitale" required>
                </div>
                
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-fire"></span> Valider mes réponses et voir mon total <span class="glyphicon glyphicon-fire"></span></button>
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