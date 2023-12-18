<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"> 
    <title>PHP Hotel</title>
</head>

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
<body>
 <?php 
 $voto = $_GET["vote"] ?? 0;
 
 ?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">Vote</th>
      <th scope="col">Distance to center</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    
    foreach ($hotels as $hotel){
       if($voto  <= $hotel["vote"]){
      echo  "<tr><td>".$hotel['name']."</td>";
      echo  "<td>".$hotel['description']."</td>";
      echo  "<td>".$hotel['parking']."</td>";
      echo  "<td>".$hotel['vote']."</td>";
      echo  "<td>".$hotel['distance_to_center']."</td></tr>";
       } 
     
    } 
    ?>
  </tbody>
</table>
  <a href="ricerca.php">Return to search</a>
    
</body>
</html>



