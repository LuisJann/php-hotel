<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <tr>
            <th scope="col"></th>
            <th scope="col">Description</th>
            <th scope="col">Vote</th>
            <th scope="col">Distanza dal centro </th>
            <th scope="col">Parcheggio </th>
        </tr>
        <?php
        for ($i = 0; $i < count($hotels); $i++) {
            $this_hotel = $hotels[$i]; ?>
            <thead>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $this_hotel["name"] ?></th>
                    <td><?php echo $this_hotel["description"] ?></td>
                    <td><?php echo "voto: " . $this_hotel["vote"] ?></td>
                    <td><?php echo "distanza dal centro: " . $this_hotel["distance_to_center"] . "km" ?></td>
                    <td><?php if ($this_hotel["parking"] === true) {
                            echo "parcheggio disponibile: SI";
                        } else {
                            echo "parcheggio disponibile: NO";
                        }
                        ?></td>
                </tr>
            <?php } ?>
    </table>
</body>

</html>