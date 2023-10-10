<?php

//    Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LIVE CODING 1</title>

    <style>
        .red {
            color: red;
        }

        .green {
            color: green;
        }
    </style>

</head>

<body>

    <?php

    if (empty($_GET["pass"])) {
        echo "<p>Inserisci una Password</p>";
    } else {
        $password = $_GET["pass"];
        if ($password == "Boolean") {
            # GREEN STRING
            $class = "green";
        } else {
            # RED STRING
            $class = "red";
        }
    }

    ?>

    <!-- E' POSSIBILE APRIRE UN TAG PHP, INSERIRE UNA PRIMA PARTE DEL CODICE PER INCARTARE DEL MARKUP HTML... (LA GRAFFA DI CHIUSURA DI IF E' SUBITO DOPO IL MARKUP HTML CHE VOGLIAMO VENGA SOTTOPOSTO ALLA CONDIZIONE DENTRO IL TAG php SUCCESSIVO)-->
    <?php
    if (isset($_GET["pass"]) && !empty($_GET["pass"])) {
    ?>

        <p class="<?php echo $class ?>">La password è <?php echo $password ?></p>

        <!-- E CONTINUARE IL RESTO DEL CODICE SUCCESSIVAMENTE - NOTA PARENTESI GRAFFA SUBITO DOPO IL TAG ?php -->
    <?php } ?>

    <!-- SE ATTR Action E' VUOTO O ASSENTE IL FORM FA RIFERIMENTO ALLA STESSA PAGINA -->
    <form method="GET">

        <input action="" type="text" name="pass" id="pass">

        <button type="submit">CHECK</button>

    </form>

</body>

</html>