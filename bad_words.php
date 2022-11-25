<?php
$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];

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
    <p>Il paragrafo che hai inserito è il segutente: <br> <strong><?php echo $paragrafo; ?></strong></p>
    <span>La parola che hai inserito è la segutente: <br> <strong><?php echo $parola; ?></strong></span>
</body>
</html>