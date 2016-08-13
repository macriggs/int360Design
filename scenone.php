<!DOCTYPE html>
<!Design Prototype>
<!Created By SquareCell for Learning Futures>
<?php
 session_start();
?>
<html>
    <head>
        <meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
        <div id="scenarios">
            <div id="prompts">
                A student is not learning. Pick an option
            </div>
            <div id="options">
                <ul>
                    <li id="option1">
                        
                        <!-- this section-->
                        <button href="allscen.php" type="button" action="<?php $_SESSION["scenario1"] = true; ?>">Good option</button>
                        <?php echo $_SESSION["scenario1"]; ?> <!--for isolating-->
                        
                    </li>
                    <li id="option2">Bad option</li>
                </ul>
            </div>
            
            <div class="feedback"></div>
            <a href="allscen.php">Back to scenarios</a>
        </div>
    </body>
</html>