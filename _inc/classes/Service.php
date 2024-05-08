<?php

class Service extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function getAllServices()
    {
        try {
            $query = "SELECT * FROM services"; // Changed table name from `Services` to `services`
            $result = $this->db->query($query);
            $services = [];
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $services[] = $row;
            }
            return $services;
        } catch (PDOException $e) {
            echo "Error retrieving services: " . $e->getMessage();
            return [];
        }
    }
 
    
}

?>
