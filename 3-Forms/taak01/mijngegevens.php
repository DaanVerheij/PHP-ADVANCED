



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Welkom " .$_POST["voornaam"];
    echo " " .$_POST["achternaam"];
    echo "<br />Leeftijd: " .$_POST["leeftijd"];
    echo "<br />Adres: " .$_POST["adres"];
    echo "<br />Plaatsnaam: " .$_POST["plaatsnaam"];
    echo "<br />Geslacht: " .$_POST["drone"];
    
   
    ?>

    <style>
        body
        {
            background color: <?php echo $kleur; ?>;
        }
    </style>


</body>
</html>