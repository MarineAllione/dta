<?php

$myGlobalVar = ""; 

?>
<html>
    <head>
        <title>Scope of vars in PHP</title>
        <link 
            rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
            crossorigin="anonymous">
    </head>
    <body>

<?php /*

        <h1>
            <div class="alert alert-info" role="alert">Variables globales</div>
        </h1>
        <h1>
            <?php 
            
            function affecteMalGlobalVariable() {

                $myGlobalVar = "Une valeur mal affectée localement";
            }

            affecteMalGlobalVariable();
            
            echo "Variable globale myVar mal affectée : ".$myGlobalVar; 
            
            ?>
        </h1>          
        
        <h1>
            <?php    
            
            function affecteBienGlobalVariable() {

                global $myGlobalVar;
                
                $myGlobalVar = "Une valeur bien affectée localement";
            }

            affecteBienGlobalVariable();
            
            echo "Variable globale myVar bien affectée : ".$myGlobalVar;
            
            ?>            
        </h1>
        
        <h1>
            <div class="alert alert-info" role="alert">Variables locales</div>
        </h1>
        <h1>
            <?php 
            
            function affecteBienLocalVariable() {

                $myLocalVar = "Une valeur bien affectée localement";
                
                return $myLocalVar;
            }
            
            echo "Variable locale bien affectée et retournée : ".affecteBienLocalVariable(); 
            
            ?>
        </h1>


        
        <h1>
            <div class="alert alert-info" role="alert">Variables statiques</div>
        </h1>
        
        <?php 

        function counter() {

            static $myCounter = 0;

            $myCounter++;

            return $myCounter;
        }

        ?>

        <h1>
        <?php

        echo "Le compteur vaut : ".counter(); 

        ?>
        </h1>
        <h1>
        <?php

        echo "Le compteur vaut : ".counter(); 

        ?>
        </h1>
        <h1>
        <?php

        echo "Le compteur vaut : ".counter(); 

        ?>
        </h1>
*/ ?>    
        <h1>
            <div class="alert alert-info" role="alert">Passage par référence</div>
        </h1>
        
        <h1>
        
        <?php 

        $myVar  = "Chaine initiale";
        
        function appendParValeur($base, $suffix) {

            $base = $base.$suffix;
        }
        
        appendParValeur($myVar, " avec un suffixe");    
            
        echo "La chaine de base avec un append par valeur vaut : ".$myVar;

        ?>

        </h1>
        
        <h1>
        
        <?php 

        $myRef  = "Chaine initiale";
        
        function appendParReference(&$base, $suffix) {

            $base = $base.$suffix;
        }
        
        appendParReference($myRef, " avec un suffixe");    
            
        echo "La chaine de base avec un append par valeur vaut : ".$myRef;

        ?>

        </h1>

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