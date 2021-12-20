<?php

// ## Snack 3
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

$posts = [

    '10/01/2019' => [
        [
            'title' => 'La torta della nonna',
            'author' => 'Benedetta Parodi',
            'text' => 'Chi si ricorda quando al ristorante, fra la metà degli anni Ottanta e i primi anni Novanta, arrivava il momento più atteso, il carrello dei dolci? E tra altissime montagne di profiteroles, tentati dalla teglia del tiramisù o ingolositi dalla panna cotta... alla fine spesso la meglio l aveva lei: la torta della nonna! Sarà per il suo nome rassicurante, che sa di buono e genuino, o per la sua semplicità ma la torta della nonna è ancora oggi un must! Un classico intramontabile, un dolce perfetto per il pranzo della domenica che noi vogliamo farvi assaporare al meglio, preparando una deliziosa frolla fragrante e una divina crema pasticcera. Esistono almeno due versioni della torta della nonna: una aperta, che prevede la base e la crema direttamente guarnita con pinoli e zucchero a velo, e una coperta, con doppio strato di frolla e al centro la crema pasticcera. Noi abbiamo optato per quest ultima e... ci auguriamo che la vostra scelta sulla carrellata di dolci di GialloZafferano ogni tanto cada anche su questa bontà!'
        ],
        [
            'title' => 'Crostata alla frutta',
            'author' => 'Benedetta Parodi',
            'text' => 'Tra tutti i dolci esistenti sicuramente la crostata alla frutta è il dolce classico e intramontabile di diritto. Un fragrante scrigno di pasta frolla che raccoglie uno strato di crema pasticcera e tantissima frutta fresca. Del resto le crostate sempre colorate, fresche e profumate, sono la merenda ideale da gustare durante il pomeriggio o al termine di una cena. Per la crostata alla frutta vi consigliamo sempre di scegliere la frutta di stagione per decorare e arricchire il vostro dolce, realizzando ogni volta una crostata personalizzata in base al periodo e alle vostre esigenze. Potrete fare anche delle sfiziose varianti, per esempio con una base senza uova o in quella più originale all occhio di bue! Giocate con la frutta e divertitevi a creare nuove composizioni, alternando gusti e colori sempre differenti… esprimete la vostra fantasia per dar vita alla vostra crostata alla frutta.'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Torta allo yogurt',
            'author' => 'Benedetta Parodi',
            'text' => 'La torta allo yogurt è un dolce molto semplice da fare. Gustosa, soffice e più leggera di un dolce normale proprio grazie alla presenza dello yogurt, che le da un gusto un più deciso e invitante.

            La peculiarità di questa ricetta è data dal fatto che la potrete (e dovrete) eseguire senza l’utilizzo di alcuna bilancia: il barattolino dello yogurt diventerà il misurino con cui calcolare la quantità degli altri ingredienti.
            
            In linea di massima, la maggior parte dei barattoli di yogurt in commercio ha una capienza di 125 grammi. Su questa misura, quindi, si basano tutte le dosi della ricetta.'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Salame di cioccolato',
            'author' => 'Benedetta Parodi',
            'text' => 'Con cioccolato, biscotti, burro e zucchero si può realizzare uno dei dolci senza cottura più amati della cucina casalinga, il salame di cioccolato! Chiamato anche salame turco o salame vichingo a seconda della regione d’Italia, deve il suo nome alla somiglianza con un vero e proprio insaccato sia per la forma che per la bianca copertura realizzata con lo zucchero a velo. Ogni famiglia ha la sua ricetta: noi abbiamo scelto di realizzare il salame di cioccolato senza uova e di aromatizzarlo con un goccio di rum, ma potete provare tante altre golose varianti come quella al caffè, al torrone o ai frutti esotici. Perfetto per la merenda, per un compleanno o per un semplice fine pasto, il salame di cioccolato è da sempre un’irresistibile tentazione per grandi e piccoli!

            INGREDIENTI'
        ],
        [
            'title' => 'MILLEFOGLIE AL CIOCCOLATO',
            'author' => 'Benedetta Parodi',
            'text' => 'Golosa e scenografica la millefoglie al cioccolato è un dessert che conquista tutti!
            Una variante della più classica e conosciuta con crema pasticcera: una torta di origini francese di cui esistono molte versioni con farciture di tutti i gusti.
            
            Si tratta di un dolce composto da tre strati di pasta sfoglia croccante alternati a goduriosa crema pasticcera al cioccolato fondente.
            Semplicissima da preparare soprattutto se utilizzate la sfoglia già pronta da cuocere.
            
            Assemblatela all ultimo così da portarla in tavola perfetta e deliziosa.
            Per un tocco in più noi abbiamo aggiunto del cocco grattuggiato sulla superficie: curiosi di assaggiarla?
            
            Ecco la nostra video ricetta e le spiegazioni passaggio dopo passaggio della nostra millefoglie al cioccolato.'
        ],
        [
            'title' => 'Pasticciotti',
            'author' => 'Benedetta Parodi',
            'text' => 'Se vi è capitato di passare dalle parti di Lecce, avrete notato che la colazione tipica non prevede la classica brioches ma un dolce goloso e profumato, da mangiare rigorosamente caldo: il pasticciotto!
            I pasticciotti sono i simboli della pasticceria salentina e sono formati da un guscio di pasta frolla croccante e un ripieno di crema pasticcera; la variante più comune prevede che il ripieno sia arricchito con delle deliziose amarene e noi le abbiamo provate in entrambe le versioni: buonissimi!
            La ricetta tradizionale prevede che la frolla dei pasticciotti sia preparata con lo strutto; nella nostra ricetta abbiamo invece usato una pasta frolla classica con il burro.
            I pasticciotti sono dolcetti profumati che sembrano racchiudere tutto il colore e il calore del sole salentino!
            
            Per una versione maxi provate anche la nostra torta pasticciotto! '
        ]
    ],
];

$date = array_keys($posts);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
</head>

<body>
    <ul>
        <li>
            <?php
            echo $date[0];
            ?>
            <ul>
                <li>
                    <h4>
                        <?php
                        echo $posts['10/01/2019'][0]['title']
                        ?>

                    </h4>
                    <h6>
                        <?php
                        echo $posts['10/01/2019'][0]['author']
                        ?>

                    </h6>
                    <p>
                        <?php
                        echo $posts['10/01/2019'][0]['text']
                        ?>
                    </p>
                </li>
                <li>
                    <h4>
                        <?php
                        echo $posts['10/01/2019'][1]['title']
                        ?>

                    </h4>
                    <h6>
                        <?php
                        echo $posts['10/01/2019'][1]['author']
                        ?>

                    </h6>
                    <p>
                        <?php
                        echo $posts['10/01/2019'][1]['text']
                        ?>
                    </p>
                </li>

            </ul>

        </li>
    </ul>
    <ul>
        <li>
            <?php
            echo $date[1];
            ?>
            <ul>
                <li>
                    <h4>
                        <?php
                        echo $posts[$date[1]][0]['title']
                        ?>

                    </h4>
                    <h6>
                        <?php
                        echo $posts[$date[1]][0]['author']
                        ?>

                    </h6>
                    <p>
                        <?php
                        echo $posts[$date[1]][0]['text']
                        ?>
                    </p>
                </li>
            </ul>

        </li>
    </ul>
    <ul>
        <li>
            <?php
            echo $date[2];
            ?>
            <ul>
                <li>
                    <h4>
                        <?php
                        echo $posts[$date[2]][0]['title']
                        ?>

                    </h4>
                    <h6>
                        <?php
                        echo $posts[$date[2]][0]['author']
                        ?>

                    </h6>
                    <p>
                        <?php
                        echo $posts[$date[2]][0]['text']
                        ?>
                    </p>
                </li>
                <li>
                    <h4>
                        <?php
                        echo $posts[$date[2]][1]['title']
                        ?>

                    </h4>
                    <h6>
                        <?php
                        echo $posts[$date[2]][1]['author']
                        ?>

                    </h6>
                    <p>
                        <?php
                        echo $posts[$date[2]][1]['text']
                        ?>
                    </p>
                </li>
                <li>
                    <h4>
                        <?php
                        echo $posts[$date[2]][2]['title']
                        ?>

                    </h4>
                    <h6>
                        <?php
                        echo $posts[$date[2]][2]['author']
                        ?>

                    </h6>
                    <p>
                        <?php
                        echo $posts[$date[2]][2]['text']
                        ?>
                    </p>
                </li>
            </ul>
        </li>
    </ul>

</body>

</html>