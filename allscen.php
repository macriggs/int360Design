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
        <div id="intro">This is where we would briefly introduce users to 360 movement concepts<br/>
            <a href="index.php">Home</a>
        </div>
        <div id="maincontent">
            <div id="scenarioone">
                
                <!-- this section-->
                <?php if($_SESSION["scenario1"]){
                    echo '<style type="text/css">
                        #scenarioone {background-color: green;}
                        </style>';
                    echo $_SESSION["scenario1"];
                } else{ //nothing
                    } ?>
                <button type="button" onclick="<?php $_SESSION["scenario1"] = false;?>">Set False</button>
                <a href="scenone.php">Scenario 1</a>
                
            </div>
            <div id="scenariotwo">
                <a href="scentwo.php">Scenario 2</a>
            </div>
            <div id="scenariothree">
                <a href="scenthree.php">Scenario 3</a>
            </div>
            <div id="scenariofour">
                <a href="scenfour.php">Scenario 4</a>
            </div>
        </div>
    </body>
</html>