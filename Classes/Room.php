<?php

    class Room{

    //Attributs
        private Hotel $hotel;
        private string $nRoom;
        private string $nbBed;
        private float $price;
        private bool $wifi;
        private bool $status;
        private array $bookings;
        private array $bookedRoom;

    //__construct
        public function __construct(Hotel $hotel, string $nRoom, string $nbBed, float $price, bool $wifi){
            
            $this->hotel = $hotel;
            $this->nRoom = $nRoom;
            $this->nbBed = $nbBed;
            $this->price = $price;
            $this->wifi = $wifi;
            
            $this->bookings = [];

            $this->hotel->addRoomStatus($this);
            
        }


    //Methods
        public function addBooking(Booking $booking){
                return $this->bookings[] = $booking;
        }


        
    //Gettters and Setters

        //Hotel
        public function getHotel()
        {
                return $this->hotel;
        }
 
        public function setHotel($hotel)
        {
                $this->hotel = $hotel;

                return $this;
        }

        //NRoom
        public function getNRoom()
        {
                return $this->nRoom;
        }

        public function setNRoom($nRoom)
        {
                $this->nRoom = $nRoom;

                return $this;
        }

        //NbBed
        public function getNbBed()
        {
                return $this->nbBed;
        }

        public function setNbBed($nbBed)
        {
                $this->nbBed = $nbBed;

                return $this;
        }

        //Price
        public function getPrice()
        {
                return $this->price;
        }

        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        //Wifi
        public function getWifi()
        {
                if($this->wifi == true){
                        return "Wifi : Yes";
                }else{
                        return "Wifi : No";
                }
        }

        public function setWifi($wifi)
        {
                $this->wifi = $wifi;

                return $this;
        }

        //Status
        public function getStatus()
        {
                if($this->wifi == true){
                        return "<span class='available'>AVAILEABALE</span>";
                }else{
                        return "<span class='unvailable'>UNAVAILEABALE</span>";
                }
        }

        public function setStatus($status)
        {
                $this->status = $status;

                return $this;
        }

        //Booking/ 
        public function getBooking()
        {
                return $this->bookings;
        }
 
        public function setBooking($bookings)
        {
                $this->bookings = $bookings;

                return $this;
        }

        public function __toString(){
                return "Room ". $this->nRoom . " : " . $this->nbBed . ", " . $this->price . "$, " . $this->getWifi() . ".";
        }

         
        public function getBookedRoom()
        {
                return $this->bookedRoom;
        }

        public function setBookedRoom($bookedRoom)
        {
                $this->bookedRoom = $bookedRoom;

                return $this;
        }

        
        
    }
?>