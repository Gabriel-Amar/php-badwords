<?php
    $stringa = "Lorem ipsum dolor sit amet dolor consectetur adipisicing elit. Autem, fuga?";
    if(isset($_GET["parola"])){
        $nuova_stringa = str_replace($_GET["parola"], "***", $stringa);
    }else{
        $nuova_stringa = "Inserisci una parola";
    }
    //$nuova_stringa = str_replace($_GET["parola"], "***", $stringa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<style>
    body{
        text-align: center;
    }
</style>
<body>
    <h2>Stringa</h2>
    <p><?php echo $stringa ?></p>
    <h2>Lunghezza Stringa</h2>
    <p><?php echo strlen($stringa) ?></p>
    <h2>Nuova Stringa</h2>
    <p><?php echo $nuova_stringa ?></p>
</body>
</html>