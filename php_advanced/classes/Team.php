<?php
class Team {
    
    private $name;
    
    private $starPlayer;
    
    function __construct($name) {
        
        $this->name = $name;
    }
        
    public function getStarPlayer() {
        
        return $this->starPlayer;
    }
    
    public function setStarPlayer($player) {
        
        $this->starPlayer = $player;
    }
    
    public function getName() {
        
        return $this->name;
    }
}
?>