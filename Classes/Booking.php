<?php

    class Booking{

        
    //Attributs
        private Hotel $hotel;
        private Customer $customer;
        private Room $room;
        private DateTime $arrDate;
        private DateTime $depDate;
        // private array $bookedRoom;


    //__construct
        public function __construct(Hotel $hotel, Customer $customer, Room $room, string $arrDate, string $depDate){
            
            $this->hotel = $hotel;
            $this->customer = $customer;
            $this->room = $room;
            $this->arrDate = new DateTime($arrDate);
            $this->depDate = new DateTime($depDate);

            $this->hotel->addBooking($this);
            $this->room->addBooking($this);
            
        //     $this->bookedRoom = [];
        }
        
        
        //Methods

        // public function addBookedRoom(Room $bookedRoom){
        //         return $this->bookedRoom[] = $bookedRoom;
        // }
        
        public function getNumberOfRooms() { //Ramener le n° de chambre pour la fonction countReservedRoom()
                return $this->room->getNRoom();
        }
        
        public function getHotelBooking(){ //faire un forEach pour lire tout les Clients et un if / else pour marquer "Aucune réservation" si aucune n'est faite
                return "<h2>Booking of the hotel " . $this->hotel . "</h2>
                <span>". $this->hotel->countReservedRooms() ." bookings</span>
                <p>". $this->getCustomer() . " - Room " .$this->getNumberOfRooms() . " - du " . $this->getArrDate() . " au " . $this->getDepDate() . "</p><br>";
        }
        
        public function getCustomerBooking(){ //faire un forEach pour lire toutes les Chambres, l.42 faire une fonction countReservationCusotmer pour lire combien de chambre il a réservé
                return "<h2>Booking of " . $this->getCustomer() . "</h2>
                <span>". $this->hotel->countReservedRooms() ." bookings</span> 
                <p><strong>Hotel : ". $this->hotel . "</strong> -> " .$this->room . " du " . $this->getArrDate() . " au " . $this->getDepDate() . "<br>
                Total : " . $this->room->getPrice() . "$</p><br>";
        }

        //Getter and Setters

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
        

        //Customer
        public function getCustomer()
        {
                return $this->customer;
        }

        public function setCustomer($customer)
        {
                $this->customer = $customer;

                return $this;
        }

        //Room
        public function getRoom()
        {
                return $this->room;
        }

        public function setRoom($room)
        {
                $this->room = $room;

                return $this;
        }

        //Arrival Date
        public function getArrDate()
        {
                return $this->arrDate->format("d-m-Y");
        }

        public function setArrDate($arrDate)
        {
                $this->arrDate = $arrDate;

                return $this;
        }

        //Departure Date
        public function getDepDate()
        {
                return $this->depDate->format("d-m-Y");
        }

        public function setDepDate($depDate)
        {
                $this->depDate = $depDate;

                return $this;
        }
    }
?>