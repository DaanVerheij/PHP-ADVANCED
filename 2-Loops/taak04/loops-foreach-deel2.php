
<?php
    $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
    foreach($klassen as $waarde){

    
    $klassen = $_GET["$klassen"];
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body{

        background color: <?php echo $klassen; ?>
    }
    </style>
</head>

<body>
    <?php echo $klassen; ?>
</body>
</html>