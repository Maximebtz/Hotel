<?php

    class Customer{

    //Attributs
        private string $name;
        private string $firstName;
        private array $bookings;


    //__construct

        public function __construct(string $name, string $firstName){

            $this->name = $name;
            $this->firstName = $firstName;

            $this->bookings = [];
        }

        //Methods

        public function addBooking(Booking $booking){
            return $this->bookings[] = $booking;
        }

        public function countReservedRooms() { //Fonction qui compte le nombre de chambres réservées
            $count = 0;
            foreach ($this->bookings as $booking) {
                $count = $booking->getNumberOfRooms();
            }
            return $count;
        }

        public function countTotalPrice(){

            $results = 0;

            foreach($this->bookings as $booking){
                $results += $booking->countDiffPrice(); 
            }

            return $results;
        }    

        public function getCustomerBooking(){ 

            
            $results = "<h2>Booking of " . $this . " :</h2>";
            
            
            if($this->countReservedRooms() <= 1){
                $results .= "<span>". $this->countReservedRooms() ." booking</span>";
            }else{
                $results .= "<span>". $this->countReservedRooms() ." bookings</span>";
            }
            if($this->countReservedRooms() == 0){
                $results .= "<strong><p>Aucune réservation !</p></strong>";
            }
            
            
            foreach($this->bookings as $booking){  //faire un forEach pour lire toutes les Chambres
                $results .= "<p><strong>Hotel : ". $booking->getHotel() . "</strong> -> " . $booking->getRoom() . $booking->getDate() . "<br>";
            }
            
            $results .= "Total : " . $this->countTotalPrice() . "$</p>";
            

                return $results;
            }

        public function countCustomersRooms() { //Fonction qui compte le nombre de chambres réservées
        $count = 0;
        foreach ($this->bookings as $booking) {
            $count = $booking->getNumberOfRooms();
        }
        return $count;
        }

    //Getters and Setters
        
        
        //Name
        public function getFirstName()
        {
                return $this->firstName;
        }

        public function setFirstName($firstName)
        {
                $this->firstName = $firstName;

                return $this;
        }

        //FirstName
        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function __toString(){
            return $this->getName() . " " . $this->getFirstName();
        }
    }
?>