<?php

function my_autoloader($class) {
    include 'classes/' . $class . '.php';
}

spl_autoload_register('my_autoloader');

$equipe1 = new Team("AS St-Etienne");

$equipe2 = new Team("Olympique Marseille");

$joueur1 = new Player("Loic", "Perrin");

$joueur2 = new Player("Florian", "Thauvin");

$equipe1->setStarPlayer($joueur1);

$equipe2->setStarPlayer($joueur2);
?>
<!doctype html>
<html>
    <head>
        <title>Autoload PHP</title>
        <link 
            rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
            crossorigin="anonymous">
        
        <link rel="stylesheet" href="styles/autoload.css">
    </head>
    <body>
        <h1>
            <div class="alert alert-info" role="alert">Le Match</div>
        </h1>
        <h1>
            <span class="glyphicon glyphicon-menu-right"></span>
            <?php echo $equipe1->getName()." - ".$equipe2->getName(); ?>
            <span class="glyphicon glyphicon-menu-left"></span>
        </h1>
        
        <h2>
            <div class="alert alert-info" role="alert">Le Duel</div>
        </h2>
        <h2>
            <span class="glyphicon glyphicon-fire"></span>
            <?php echo $equipe1->getStarPlayer()->getFullName()." - ".$equipe2->getStarPlayer()->getFullName(); ?>
            <span class="glyphicon glyphicon-fire"></span>
        </h2>
        
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