<?php

$paragraph = 'ciao Luigi sono Giovanni';
$bad_word = $_GET['badword'];
$nuovo_paragrafo = str_replace($bad_word, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $paragraph; ?></h2>
    <p><?php echo strlen($paragraph);?></p>
    <h2><?php echo $nuovo_paragrafo; ?></h2>
    <p><?php echo strlen($nuovo_paragrafo); ?></p>
</body>
</html>