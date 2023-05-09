<?php

    class Booking{

        
    //Attributs
        private Hotel $hotel;
        private Customer $customer;
        private Room $room;
        private DateTime $arrDate;
        private DateTime $depDate;
        private DateTime $today;


    //__construct
        public function __construct(Hotel $hotel, Customer $customer, Room $room, string $arrDate, string $depDate){
            
            $this->hotel = $hotel;
            $this->customer = $customer;
            $this->room = $room;
            $this->arrDate = new DateTime($arrDate);
            $this->depDate = new DateTime($depDate);

            $this->today = new DateTime('now');
            

            $this->hotel->addBooking($this);
            $this->room->addBooking($this);
            $this->room->addBookedDate($this);
            $this->customer->addBooking($this);
            
        //     $this->bookedRoom = [];
        }
        
        
        //Methods

        public function getNumberOfRooms() { //Ramener le n° de chambre pour la fonction countReservedRoom()
                return $this->room->getNRoom();
        }
        
        public function getDate(){
                return " du ". $this->getArrDate() . " au " . $this->getDepDate();
        }

        public function countDiffPrice(){

                $arr = $this->arrDate;
                $dep = $this->depDate;
                $diff = date_diff($arr, $dep);
                $price = $diff->format("%a") * $this->room->getPrice(); //%a difference nm jours
                
                return $price;

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
        public function getDepDate(){       
                if($this->depDate < $this->arrDate){
                        return "<p>Vous ne pouvez pas mettre la date de départ avant la date d'arrivé.</p>";
                }else{
                        return $this->depDate->format("d-m-Y");
                }
        }

        public function setDepDate($depDate)
        {
                $this->depDate = $depDate;

                return $this;
        }

        
        //Today
        public function getToday()
        {
                return $this->today->format("d-m-Y");
        }

        
        public function setToday($today)
        {
                $this->today = $today;

                return $this;
        }
    }
?>