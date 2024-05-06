<?php

class Reviews extends Database {
    private $db;

    public function __construct(){
        $this->db = $this->db_connection();        
    }

}

?>
