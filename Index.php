<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Styles/Style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <title>Hotel</title>
    </head>
    <body>
        
        <h1>POO Hotel</h1>
        <?php

            spl_autoload_register(function ($class_name) {
                include "Classes/" . $class_name . '.php';
            });


        //New Hotel
            $hotel1 = new Hotel("Hilton **** Strasbourg", "10 route de la gare 67000 STRASBOURG", 30);
            $hotel2 = new Hotel("Regent **** Paris", "10 route de la gare 67000 STRASBOURG", 50);
            
        //New Room       
            $room1 = new Room($hotel1, "1", "2 simple bed", 120, false);
            $room2 = new Room($hotel1, "2", "1 double bed", 140, true);
            $room3 = new Room($hotel1, "3", "1 double bed", 120, false);
            $room16 = new Room($hotel1, "16", "2 double bed", 300, true);
            $room17 = new Room($hotel1, "17", "2 double bed", 300, true);
            $room18 = new Room($hotel1, "18", "2 double bed", 300, true);
            $room19 = new Room($hotel1, "19", "2 double bed", 300, true);

        //New Customer
            $person1 = new Customer("Bertuzzi", "Maxime");
            $person2 = new Customer("Bertuzzi", "Mauro");

        //New Booking
            $booking1 = new Booking($hotel1, $person1, $room1, "20-05-2023", "30-05-2023");
            $booking1 = new Booking($hotel1, $person1, $room1, "20-05-2023", "30-05-2023");
            $booking2 = new Booking($hotel1, $person1, $room2, "25-05-2023", "01-06-2023");
            $booking2 = new Booking($hotel1, $person2, $room2, "25-05-2023", "01-06-2023");
            $booking3 = new Booking($hotel1, $person2, $room3, "29-05-2023", "15-06-2023");



            echo $hotel1->displayAvailableRoom();
            echo "<br><p>****************</p><br>";
            echo $hotel1->getHotelBooking();
            echo "<br><p>****************</p><br>";
            echo $hotel2->getHotelBooking();
            echo "<br><p>****************</p><br>";
            echo $person1->getCustomerBooking();
            echo "<br><p>****************</p><br>";
            echo $hotel1->getRoomStatus();
            echo "<br><p>****************</p><br>";
            
        ?>
    </body>
</html>