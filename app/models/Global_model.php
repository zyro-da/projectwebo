<?php 

class Global_model {
    private $db;
    private $stmt;

    public function __construct(){
        $this->db = new Database;
    }    
    
}

?>