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

    <?php foreach ($db as $key => $value) { ?>
        <div class="box <?php echo $key ?>">
            <h1>
                <?php echo strtoupper($key) ?>
            </h1>
            <ul>
                <?php foreach ($value as $name) {?>
                    <li>
                        <?php echo $name['name'] . ' ' . $name['lastname'] ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</body>

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    h1{
        font-size: 30px;
        margin-bottom: 40px;
    }
    .box {
        width: 300px;
        height: 300px;
        margin-right: 20px;
        padding: 40px;
    }
    .teachers {
        background-color: lightgray;
    }

    .pm {
        background-color: lightgreen;
    }
</style>

</html>