<?php

// print_r($_GET);


if (isset($_GET["number1"]) && !empty($_GET["number1"])
&& isset($_GET["number2"]) && !empty($_GET["number2"])
&& isset($_GET["operationType"]) && !empty($_GET["operationType"])
) {
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $operationType = $_GET["operationType"];

    // Checks which operation to do
    switch ($operationType) {
        case "addition":
            $result = $number1 + $number2;
            break;
        case "soustraction":
            $result = $number1 - $number2;
            break;
        case "multiplication":
            $result = $number1 * $number2;
            break;
        case "division":
            $result = $number1 / $number2;
            break;
    } 

    // If one of the field is empty
    if (empty($_GET["number1"]) || empty($_GET["number2"]) || empty($_GET["operationType"])) {
        echo "Error";

        $message = "<p id=\"warning\">Oh ho, it looks like you didn't enter any number or didn't select the operator for your calculation. Please try again.</p>";
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Web tutorials"><!--description de la page-->
        <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
        <meta name="author" content="Marilène Khieu"><!--Auteur du site-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator with PHP</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
        <h1>Calculator with PHP</h1>

        <form action="#" method="GET">
            <div id="container">
                <input type="number" name="number1">
                <select name="operationType">
                    <option value="" disabled selected>Choose operation</option>
                    <option value="addition">+</option>
                    <option value="soustraction">-</option>
                    <option value="multiplication">x</option>
                    <option value="division">/</option>
                </select>
                <input type="number" name="number2">
                <input type="submit" value="Calculate">
            </div>
        </form>

        <div id="result">
            <?php if (isset($result)){
                echo "<p>Result is " . $result . "</p><br>
                <a href=\"index.php\" id=\"clearBtn\">Clear result</a>";
            } else {
                echo "";
            }
              ?>
        </div>
        
    </body>

</html>
