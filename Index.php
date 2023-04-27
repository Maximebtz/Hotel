<?php

spl_autoload_register(function ($class_name) {
    include "Classes/" . $class_name . '.php';
});



$hotel1 = new Hotel("Hotel ***** STRASBOURG", "10 route de la gare 67000 STRASBOURG", 30);
$room1 = new Room($hotel1, 1, "1 double bed", 120, true);
$person1 = new Customer("Bertuzzi", "Maxime");
$booking1 = new Booking($hotel1, $person1, $room1, "20-05-2023", "30-05-2023");



echo $hotel1->displayAvailableRoom();
echo "<br>****************<br>";
echo "<br>****************<br>";
echo "<br>****************<br>";
echo "<br>****************<br>";
echo $room1;

// echo $person1;