<?php

    class Customer{

    //Attributs
        private string $name;
        private string $firstName;


    //__construct

        public function __construct(string $name, string $firstName){

            $this->name = $name;
            $this->firstName = $firstName;

        }


    //Methods


    //Gettters and Setters
        
        
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
    }
?>