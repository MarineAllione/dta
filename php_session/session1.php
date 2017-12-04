<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

    <?php
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "<p>Session variables are set.</p>";
    ?>
    
    <p><a href="session2.php">Link to Page 2 of session demo !</a></p>
    
    </body>
</html>