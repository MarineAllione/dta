<?php
class Player {
    
    private $firstName;
    
    private $lastName;
    
    function __construct($firstName, $lastName) {
        
        $this->firstName = $firstName;
        
        $this->lastName = $lastName;
    }
    
    public function getFullName() {
        
        return $this->getFirstName().' '.$this->getLastName();
    }
    
    public function getFirstName() {
        
        return $this->firstName;
    }
    
    public function setFirstName($firstName) {
        
        $this->firstName = $firstName;
    }
    
    public function getLastName() {
        
        return $this->lastName;
    }
    
    public function setLastName($lastName) {
        
        $this->lastName = $lastName;
    }
}
?>