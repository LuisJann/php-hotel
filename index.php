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

$filter_hotels = $hotels;

$filter_by_parking = $_GET["parking"] ?? "";
if ($filter_by_parking === "1") {
    $temp_Hotels = [];
    foreach ($filter_hotels as $hotel) {
        if ($hotel["parking"] === true) {
            $temp_Hotels[] = $hotel;
        };
    };
    $filter_hotels = $temp_Hotels;
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hotel</title>
</head>

<body>
    <section class="container">
        <form action="index.php" method="GET" class="mt-2">
            <select class="form-select" aria-label="Default select example" name="parking">
                <option value="">Open this select menu</option>
                <option value="">Tutti</option>
                <option value="1">Con parcheggio</option>
            </select>
            <div>
                <button class="btn btn-primary mt-2" type="submit">Filtra</button>
            </div>
        </form>

    </section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Vote</th>
                <th scope="col">Distanza dal centro </th>
                <th scope="col">Parcheggio </th>
            </tr>
        </thead>
        <?php
        for ($i = 0; $i < count($filter_hotels); $i++) {
            $this_hotel = $filter_hotels[$i]; ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $this_hotel["name"] ?></th>
                    <td><?php echo $this_hotel["description"] ?></td>
                    <td><?php echo $this_hotel["vote"] ?></td>
                    <td><?php echo $this_hotel["distance_to_center"] . " km" ?></td>
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