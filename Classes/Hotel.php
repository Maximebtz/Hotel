<?php

    class Hotel{

    //Attributs
        private string $hotelName;
        private string $hotelAdress;
        private int $numberOfRoom;
    
    //__construct
        public function __construct(string $hotelName, string $hotelAdress, int $numberOfRoom){

            $this->hotelName = $hotelName;
            $this->hotelAdress = $hotelAdress;
            $this->numberOfRoom = $numberOfRoom;

        }



    //Methods


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

    }



?>