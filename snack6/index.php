<?php

// ## Snack 6
// Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$people = array_keys($db);

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
    <div class="box-grey">
        <h1>
            <?php
            echo $people[0];
            ?>
        </h1>
        <ul>
            <li>
            <?php
            echo $db['pm'][0]['name'].' '.$db['pm'][0]['lastname'];
            ?>
            </li>
            <li>
            <?php
            echo $db['pm'][1]['name'].' '.$db['pm'][1]['lastname'];
            ?>
            </li>
        </ul>
        
        
        
    </div>
    <div class="box-green">
        <h1>
            <?php
            echo $people[1];
            ?>
        </h1>
        <ul>
            <li>
            <?php
            echo $db['teachers'][0]['name'].' '.$db['teachers'][0]['lastname'];
            ?>
            </li>
            <li>
            <?php
            echo $db['teachers'][1]['name'].' '.$db['teachers'][1]['lastname'];
            ?>
            </li>
        </ul>

    </div>
</body>

<style>
    body {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
        margin: 0;
    }

    .box-grey {
        width: 300px;
        height: 300px;
        background-color: lightgray;
        margin-right: 20px;
        padding: 40px;
    }

    .box-green {
        width: 300px;
        height: 300px;
        background-color: lightgreen;
        margin-left: 20px;
        padding: 40px;
    }
</style>

</html>