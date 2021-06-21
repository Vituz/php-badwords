<?php  
$text = 'Con il termine lorem ipsum si indica un testo segnaposto 
        utilizzato da grafici, designer, programmatori e tipografi a modo 
        riempitivo per bozzetti e prove grafiche. È un testo privo di senso, 
        composto da parole (o parti di parole) in lingua latina, 
        riprese pseudocasualmente da uno scritto di Cicerone del 45 a.C, 
        a volte alterate con linserzione di passaggi ironici.';

$bad_word = $_GET['bad_word'];

var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <p>
    <?php echo $text; ?>
    </p>

    <p>
    Lunghezza Paragrafo: <?php echo strlen($text); ?> lettere.
    </p>

    <p>
    <?php echo str_replace($bad_word, '***', $text); ?>
    </p>

</body>
</html>