<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Affichage du texte avec Php</h1>
    <p>
        cette ligne est entirement ecrite en html <br>
        <?php
        echo("Aujourdhui nous sommes :" );
        ?>
        <p>Aujourd'hui nous sommes <?php echo date("d/m/Y h:i:s");?></p>
    </p>
</body>
</html>