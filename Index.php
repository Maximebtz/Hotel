<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./Styles/Style.css">
        <title>Hotel</title>
    </head>
    <body>
        
        <h1>POO Hotel</h1>
        <?php

            spl_autoload_register(function ($class_name) {
                include "Classes/" . $class_name . '.php';
            });



            $hotel1 = new Hotel("Hilton **** Strasbourg", "10 route de la gare 67000 STRASBOURG", 30);
            $room1 = new Room($hotel1, 1, "1 double bed", 120, true);
            $room2 = new Room($hotel1, 1, "1 double bed", 120, true);
            $person1 = new Customer("Bertuzzi", "Maxime");
            $person2 = new Customer("Bertuzzi", "Mauro");
            $booking1 = new Booking($hotel1, $person1, $room1, "20-05-2023", "30-05-2023");
            $booking2 = new Booking($hotel1, $person2, $room2, "25-05-2023", "01-06-2023");



            echo $hotel1->displayAvailableRoom();
            echo "<br><p>****************</p><br>";
            // echo "<br>****************<br>";
            // echo "<br>****************<br>";
            // echo "<br>****************<br>";
            echo $booking1->getHotelBooking();
            echo "<br><p>****************</p><br>";
            echo $booking1->getCustomerBooking();


            // echo $person1;
        ?>

    </body>
</html>