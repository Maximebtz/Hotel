<?php

    class Hotel{

    //Attributs
    private Booking $booking;
        private string $hotelName;
        private string $hotelAdress;
        private int $numberOfRoom;
        private array $bookings;
    
    //__construct
        public function __construct(string $hotelName, string $hotelAdress, int $numberOfRoom){

            $this->hotelName = $hotelName;
            $this->hotelAdress = $hotelAdress;
            $this->numberOfRoom = $numberOfRoom;

            $this->bookings = [];
        }



    //Methods

        public function addBooking(Booking $booking){
            return $this->bookings[] = $booking;
        }

        public function displayAvailableRoom(){
            return "<h2>" . $this . "</h2>".
                $this->getHotelAdress() . "<br>" .
                "Number of rooms : " . $this->numberOfRoom . "<br>
                Number of booked rooms : <br> 
                Number of available rooms : <br>";
        }

    //Getters and Setters
    
        //Hotel Name
        public function getHotelName()
        {
            return $this->hotelName;
        }
        
        
        public function setHotelName($hotelName)
        {
            $this->hotelName = $hotelName;
            
            return $this;
        }
        
        //Hotel Adress
        public function getHotelAdress()
        {
                return $this->hotelAdress;
        } 
        public function setHotelAdress($hotelAdress)
        {
                $this->hotelAdress = $hotelAdress;

                return $this;
        }
         
        //Number of Room
        public function getNumberOfRoom()
        {
                return $this->numberOfRoom;
        }
 
        public function setNumberOfRoom($numberOfRoom)
        {
                $this->numberOfRoom = $numberOfRoom;

                return $this;
        }

        //Booking
        public function getBookings()
        {
                return $this->booking;
        }

        public function setBookings($booking)
        {
                $this->booking = $booking;

                return $this;
        }
        public function __toString(){
            return $this->getHotelName();
        }
    }

?>