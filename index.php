<?php
    //Esercizio 1
    $voti = [7, 5.5, 8, 6, 9];
    $somma = 0;
    
    foreach($voti as $voto){
        $somma += $voto;
    }

    $media = $somma / sizeof($voti);

    //Esercizio 2
    $spesa = ["pane", "latte", "mele"];

    //Esercizi 3
    $numeri = [3, 8, 15, 22, 7, 10, 41, 64, 5, 18];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esericizi</title>
</head>
<body>
    <main>
        <div>
            <h1>Esericizio 1</h1>
            <ul>
                <?php foreach($voti as $voto): ?>
                    <li> <?php echo($voto) ?> </li>
                <?php endforeach?>

                <p>Voti totali: <?php echo(sizeof($voti)) ?> </p>
                <p>Media: <?php echo($media) ?> </p>
                <p>Media a due decimali: <?php echo($media.round(2)) ?> </p>

                <?php if ($media >= 6){
                    echo("<h2 style='color: green'> Sufficente </h2>");
                }else{
                    echo("<h2 style=?color: red'> Insufficente </h2>");
                }
                ?>
            </ul>
        </div>
        <div>
            <h1>Esercizio 2</h1>
            
            <pre>
                <?php print_r($spesa); ?>
            </pre>
            
            <?php $spesa[] = "uova"; $spesa[] = "farina"; unset($spesa[1]);?>

            <pre>
                <?php print_r($spesa); ?>
            </pre>

            <?php $spesa = array_values($spesa);?>

            <ol>
                <?php foreach($spesa as $elemento): ?>
                    <li> <?php echo($elemento) ?> </li>
                <?php endforeach?>
            </ol>
            <!--Risposta-->
            <!--Darebbe errore perchè la funzione unset() rimuove la coppia, chiave-valore, avendo eliminato l'indice 1, farebbe un iterazione poi darebbe errore perchè $spesa[1] non esiste più.-->
        </div>
        <div>
            <h1>Esercizio 3</h1>
            
        </div>
    </main>
</body>
</html>