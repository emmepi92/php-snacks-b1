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

$dayOne = [
    [
        'casa' => 'Virtus Bologna',
        'ospiti' => 'Reyer venezia',
        'puntiCasa' => 20,
        'puntiOspiti' => 15
    ],
    [
        'casa' => 'Olimpia Milano',
        'ospiti' => 'De Longhi treviso',
        'puntiCasa' => 10,
        'puntiOspiti' => 35
    ],
    [     
        'casa' => 'New Basket Brindisi',
        'ospiti' => 'Pallacanestro Varese',
        'puntiCasa' => 18,
        'puntiOspiti' => 27
    ]
];


for ($i=0; $i < count($dayOne); $i++ ) {
    echo "{$dayOne[$i]['casa']} - {$dayOne[$i]['ospiti']} | {$dayOne[$i]['puntiCasa']}-{$dayOne[$i]['puntiOspiti']} <br />"; 
}
?>


</body>
</html>