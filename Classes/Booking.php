<?php

    class Booking{

        
    //Attributs
        private Customer $customer;
        private Room $room;
        private DateTime $arrDate;
        private DateTime $depDate;


    //__construct
        public function __construct(Customer $customer, Room $room, string $arrDate, string $depDate){
            
            $this->customer = $customer;
            $this->room = $room;
            $this->arrDate = new DateTime($arrDate);
            $this->depDate = new DateTime($depDate);

        }


    //Methods


    //Getters and Setters

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
                return $this->arrDate;
        }

        public function setArrDate($arrDate)
        {
                $this->arrDate = $arrDate;

                return $this;
        }

        //Departure Date
        public function getDepDate()
        {
                return $this->depDate;
        }

        public function setDepDate($depDate)
        {
                $this->depDate = $depDate;

                return $this;
        }
    }
?>