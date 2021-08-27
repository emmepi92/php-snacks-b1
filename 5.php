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

$testo = 'Quant’è bella giovinezza, che si fugge tuttavia! chi vuol esser lieto, sia: di doman non c’è certezza. Quest’è Bacco e Arïanna, belli, e l’un dell’altro ardenti: perché ’l tempo fugge e inganna, sempre insieme stan contenti. Queste ninfe ed altre genti sono allegre tuttavia. Chi vuol esser lieto, sia: di doman non c’è certezza. Questi lieti satiretti, delle ninfe innamorati, per caverne e per boschetti han lor posto cento agguati; or da Bacco riscaldati ballon, salton tuttavia. Chi vuol esser lieto, sia di doman non c’è certezza. Queste ninfe anche hanno caro da lor essere ingannate: non può fare a Amor riparo se non gente rozze e ingrate: ora, insieme mescolate, suonon, canton tuttavia. Chi vuol esser lieto, sia: di doman non c’è certezza. Questa soma, che vien drieto sopra l’asino, è Sileno: così vecchio, è ebbro e lieto, già di carne e d’anni pieno; se non può star ritto, almeno ride e gode tuttavia. Chi vuol esser lieto, sia: di doman non c’è certezza. Mida vien drieto a costoro: ciò che tocca oro diventa. E che giova aver tesoro, s’altri poi non si contenta? Che dolcezza vuoi che senta chi ha sete tuttavia? Chi vuol esser lieto, sia: di doman non c’è certezza. Ciascun apra ben gli orecchi, di doman nessun si paschi; oggi siam, giovani e vecchi, lieti ognun, femmine e maschi; ogni tristo pensier caschi: facciam festa tuttavia. Chi vuol esser lieto, sia: di doman non c’è certezza. Donne e giovinetti amanti, viva Bacco e viva Amore! Ciascun suoni, balli e canti! Arda di dolcezza il core! Non fatica, non dolore! Ciò c’ha a esser, convien sia. Chi vuol esser lieto, sia: di doman non c’è certezza.';


$arrayFrasi = explode('.', $testo);

for ($i=0; $i < count($arrayFrasi) - 1; $i++) {
    echo "<p> {$arrayFrasi[$i]}. </p>";
}


?>
</body>
</html>