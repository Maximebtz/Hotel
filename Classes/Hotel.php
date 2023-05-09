<?php

    class Hotel{

//Attributs
        private string $hotelName;
        private string $hotelAdress;
        private int $numberOfRoom;
        private array $bookings;
        private array $rooms;
    

//__construct
        public function __construct(string $hotelName, string $hotelAdress, int $numberOfRoom){

            $this->hotelName = $hotelName;
            $this->hotelAdress = $hotelAdress;
            $this->numberOfRoom = $numberOfRoom;

            $this->bookings = [];
            $this->rooms = [];

        }



//Methods
        public function addBooking(Booking $booking){
            return $this->bookings[] = $booking;
        }
        

        public function addRoomStatus(Room $room){
            return $this->rooms[] = $room;
        }


        public function displayAvailableRoom(){
            $availableRooms = $this->numberOfRoom - $this->countReservedRooms(); //Soustraction par rapport au nombre de chambres intitial
            return "<h2>" . $this . "</h2><p>".
                $this->getHotelAdress() . "<br>" .
                "Number of rooms : <strong>" . $this->numberOfRoom . "</strong><br>
                Number of booked rooms : <strong>" . $this->countReservedRooms() . "</strong><br> 
                Number of available rooms : <strong>" . $availableRooms . "</strong></p>";
        }


        public function countReservedRooms() { //Fonction qui compte le nombre de chambres réservées
            $count = 0;
            foreach ($this->bookings as $booking) {
                $count = $booking->getNumberOfRooms();
            }
            return $count;
        }


        public function getHotelBooking(){ //faire un forEach pour lire tout les Clients et un if / else pour marquer "Aucune réservation" si aucune n'est faite
            $results = "<h2>Reservations of the hotel " . $this . " :</h2>";
            
            
            if($this->countReservedRooms() <= 1){
                $results .= "<span>". $this->countReservedRooms() ." booking</span>";
            }else{
                $results .= "<span>". $this->countReservedRooms() ." bookings</span>";
            }

            if($this->countReservedRooms() == 0){
                $results .= "<strong><p>Aucune réservation !</p></strong>";
            }

            
            foreach($this->bookings as $booking){
                
                    $results .= "<p><strong>". $booking->getCustomer() . "</strong> - Room " . $booking->getNumberOfRooms() . " - du " . $booking->getArrDate() . " au " . $booking->getDepDate() . "</p>";
                
                }
               
            return $results;
            
        }


        public function getRoomStatus(){ 
            $results = "<h2>Rooms status of the hotel " . $this . " :</h2>
            
            <table>
                <tr class='row-title'>
                    <th scope='col'>ROOM</th>
                    <th scope='col'>PRICE</th>
                    <th scope='col'>WIFI</th>
                    <th scope='col'>STATUS</th>
                </tr>";

                
            foreach($this->rooms as $room){
                    $results .= "<tr>
                                    <th scope='row'>Room " . $room->getNRoom() . "</th>
                                    <td>" . $room->getPrice() . "$</td>
                                    <td>" . $room->getWifiIcon() . "</td>
                                    <td>" . $room->getStatus() . "</td> 
                                </tr>";
                } 

            $results .= "</table>";

            return $results;
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

    //Bookings
        public function getBookings()
        {
                return $this->bookings;
        }

        public function setBookings($bookings)
        {
                $this->bookings = $bookings;

                return $this;
        }
        
//__toString()
        public function __toString(){
            return $this->getHotelName();
        }
    }
?>