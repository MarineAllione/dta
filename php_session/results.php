<?php
session_start();

$bonnesReponses = 0;

if ($_SESSION["franceCapitale"] == "PARIS") {
    
    $bonnesReponses++;
}
if ($_SESSION["italieCapitale"] == "ROME") {
    
    $bonnesReponses++;
}
if ($_SESSION["espagneCapitale"] == "MADRID") {
    
    $bonnesReponses++;
}
if ($_SESSION["senegalCapitale"] == "DAKAR") {
    
    $bonnesReponses++;
}
if ($_SESSION["algerieCapitale"] == "ALGER") {
    
    $bonnesReponses++;
}
if ($_SESSION["egypteCapitale"] == "LE CAIRE") {
    
    $bonnesReponses++;
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
        
            <h1>Merci d'avoir participé à ce quizz sur les capitales</h1>
            
            <div class="alert alert-info" role="alert"> 
                Vous avez obtenu le score de <?php echo $bonnesReponses ?> / 6 !
            </div>
            
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