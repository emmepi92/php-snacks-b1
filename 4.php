<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$classe = [
    [
        'nome' => 'luigi',
        'cognome' => 'rossi',
        'voti' => [8,9,10,6,5]

    ],
    [
        'nome' => 'angela',
        'cognome' => 'bianchi',
        'voti' => [4,5,3,7,8]

    ],
    [
        'nome' => 'anna',
        'cognome' => 'verdi',
        'voti' => [8,5,3,7,8]

    ],
    [
        'nome' => 'pippo',
        'cognome' => 'giallo',
        'voti' => [7,9,10,4,6]

    ]
];

for ($i=0; $i< count($classe); $i++) {
    $media = (array_sum($classe[$i]['voti']) / count($classe[$i]['voti']));
    echo "{$classe[$i]['nome']} {$classe[$i]['cognome']}, media dei voti: {$media} <br />" ;
}


?>
</body>
</html>