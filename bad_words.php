<?php
//var_dump($_GET);

$frase = $_GET['frase'];
$parola = $_GET['parola'];
//echo $frase .'<br>';
//echo $parola .'<br>';


$frase_esplosa = explode(' ', $frase);
//var_dump($frase_esplosa) .'<br>';

$parola_censurata = str_ireplace($parola, '***', $frase);
//var_dump($parola_censurata) .'<br>';
//echo $parola_censurata


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad_word</title>
</head>

<body>
    <p>La frase che hai inserito è lunga <strong> <?php echo strlen($frase); ?> </strong> caratteri ed è la segutente: <br> <strong><?php echo $frase; ?></strong></p>
    <p>La parola che hai scelto di riscrivere è la segutente: <br> <strong><?php echo $parola; ?></strong></p>
    <p>La nuova frase è quindi: <br> <strong><?php echo $parola_censurata  ?></strong></p>
</body>

</html>